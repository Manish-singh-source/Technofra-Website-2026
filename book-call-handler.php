<?php

session_start();
date_default_timezone_set('Asia/Kolkata');

function redirectWithStatus($type, $message)
{
    $_SESSION['book_call_status'] = [
        'type' => $type,
        'message' => $message,
    ];

    header('Location: index.php#book-call-widget');
    exit;
}

function googleCalendarIsReady(array $googleCalendarConfig)
{
    return !empty($googleCalendarConfig['enabled'])
        && !empty($googleCalendarConfig['client_id'])
        && !empty($googleCalendarConfig['client_secret'])
        && !empty($googleCalendarConfig['refresh_token'])
        && !empty($googleCalendarConfig['calendar_id']);
}

function performJsonRequest($url, array $headers, $body = null, $method = 'POST')
{
    if (!function_exists('curl_init')) {
        return [
            'success' => false,
            'status_code' => 0,
            'body' => null,
            'error' => 'cURL extension is not enabled on this server.',
        ];
    }

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);

    if ($body !== null) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    }

    $responseBody = curl_exec($ch);
    $curlError = curl_error($ch);
    $statusCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($responseBody === false) {
        return [
            'success' => false,
            'status_code' => $statusCode,
            'body' => null,
            'error' => $curlError ?: 'Unknown cURL error.',
        ];
    }

    $decoded = json_decode($responseBody, true);

    return [
        'success' => $statusCode >= 200 && $statusCode < 300,
        'status_code' => $statusCode,
        'body' => is_array($decoded) ? $decoded : null,
        'error' => $statusCode >= 200 && $statusCode < 300 ? '' : $responseBody,
    ];
}

function fetchGoogleAccessToken(array $googleCalendarConfig)
{
    if (!function_exists('curl_init')) {
        return [null, 'cURL extension is not enabled on this server.'];
    }

    $ch = curl_init('https://oauth2.googleapis.com/token');
    $postFields = http_build_query([
        'client_id' => $googleCalendarConfig['client_id'],
        'client_secret' => $googleCalendarConfig['client_secret'],
        'refresh_token' => $googleCalendarConfig['refresh_token'],
        'grant_type' => 'refresh_token',
    ]);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);

    $responseBody = curl_exec($ch);
    $curlError = curl_error($ch);
    $statusCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($responseBody === false) {
        return [null, $curlError ?: 'Could not connect to Google OAuth.'];
    }

    $decoded = json_decode($responseBody, true);

    if ($statusCode < 200 || $statusCode >= 300 || empty($decoded['access_token'])) {
        $errorMessage = is_array($decoded) && !empty($decoded['error_description'])
            ? $decoded['error_description']
            : 'Google OAuth token request failed.';

        return [null, $errorMessage];
    }

    return [$decoded['access_token'], null];
}

function createGoogleMeetLink(array $googleCalendarConfig, DateTime $bookingDateTime, $name, $email)
{
    list($accessToken, $tokenError) = fetchGoogleAccessToken($googleCalendarConfig);

    if (!$accessToken) {
        return [null, $tokenError ?: 'Could not fetch Google access token.'];
    }

    $timezone = $googleCalendarConfig['timezone'] ?? 'Asia/Kolkata';
    $durationMinutes = max(15, (int) ($googleCalendarConfig['meeting_duration_minutes'] ?? 30));
    $startDateTime = clone $bookingDateTime;
    $endDateTime = clone $bookingDateTime;
    $endDateTime->modify('+' . $durationMinutes . ' minutes');
    $requestId = 'meet-' . bin2hex(random_bytes(8));

    $eventPayload = [
        'summary' => 'Book a Call - ' . $name,
        'description' => 'Booking created from Technofra website for ' . $name . ' (' . $email . ').',
        'start' => [
            'dateTime' => $startDateTime->format(DateTime::RFC3339),
            'timeZone' => $timezone,
        ],
        'end' => [
            'dateTime' => $endDateTime->format(DateTime::RFC3339),
            'timeZone' => $timezone,
        ],
        'conferenceData' => [
            'createRequest' => [
                'requestId' => $requestId,
                'conferenceSolutionKey' => [
                    'type' => 'hangoutsMeet',
                ],
            ],
        ],
    ];

    $calendarId = rawurlencode($googleCalendarConfig['calendar_id']);
    $createUrl = 'https://www.googleapis.com/calendar/v3/calendars/' . $calendarId . '/events?conferenceDataVersion=1&sendUpdates=none';

    $createResponse = performJsonRequest(
        $createUrl,
        [
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json',
        ],
        $eventPayload,
        'POST'
    );

    if (!$createResponse['success'] || empty($createResponse['body'])) {
        return [null, 'Google Calendar event create failed: ' . ($createResponse['error'] ?: 'Unknown error.')];
    }

    $eventBody = $createResponse['body'];
    $eventId = $eventBody['id'] ?? '';
    $meetLink = $eventBody['hangoutLink'] ?? '';

    if (!$meetLink && !empty($eventBody['conferenceData']['entryPoints'])) {
        foreach ($eventBody['conferenceData']['entryPoints'] as $entryPoint) {
            if (($entryPoint['entryPointType'] ?? '') === 'video' && !empty($entryPoint['uri'])) {
                $meetLink = $entryPoint['uri'];
                break;
            }
        }
    }

    if (!$meetLink && $eventId !== '') {
        $fetchUrl = 'https://www.googleapis.com/calendar/v3/calendars/' . $calendarId . '/events/' . rawurlencode($eventId) . '?conferenceDataVersion=1';

        for ($attempt = 0; $attempt < 3; $attempt++) {
            usleep(400000);

            $fetchResponse = performJsonRequest(
                $fetchUrl,
                [
                    'Authorization: Bearer ' . $accessToken,
                    'Content-Type: application/json',
                ],
                null,
                'GET'
            );

            if (!$fetchResponse['success'] || empty($fetchResponse['body'])) {
                continue;
            }

            $fetchedBody = $fetchResponse['body'];
            $meetLink = $fetchedBody['hangoutLink'] ?? '';

            if (!$meetLink && !empty($fetchedBody['conferenceData']['entryPoints'])) {
                foreach ($fetchedBody['conferenceData']['entryPoints'] as $entryPoint) {
                    if (($entryPoint['entryPointType'] ?? '') === 'video' && !empty($entryPoint['uri'])) {
                        $meetLink = $entryPoint['uri'];
                        break;
                    }
                }
            }

            if ($meetLink) {
                break;
            }
        }
    }

    if (!$meetLink) {
        return [null, 'Google Calendar event created, but Meet link was not returned.'];
    }

    return [[
        'meet_link' => $meetLink,
        'event_id' => $eventId,
        'duration_minutes' => $durationMinutes,
    ], null];
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectWithStatus('error', 'Invalid request method.');
}

$configPath = __DIR__ . '/book-call-config.php';
if (!file_exists($configPath)) {
    redirectWithStatus('error', 'Booking configuration file is missing.');
}

$config = require $configPath;

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$bookingDate = trim($_POST['booking_date'] ?? '');
$bookingTime = trim($_POST['booking_time'] ?? '');

if ($name === '' || $email === '' || $phone === '' || $bookingDate === '' || $bookingTime === '') {
    redirectWithStatus('error', 'Please fill all booking details before submitting the form.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectWithStatus('error', 'Please enter a valid email address.');
}

if (!preg_match('/^[0-9+\-\s]{10,15}$/', $phone)) {
    redirectWithStatus('error', 'Please enter a valid phone number.');
}

$selectedDate = DateTime::createFromFormat('Y-m-d', $bookingDate);
$selectedTime = DateTime::createFromFormat('H:i', $bookingTime);

if (!$selectedDate || $selectedDate->format('Y-m-d') !== $bookingDate) {
    redirectWithStatus('error', 'Selected date is invalid.');
}

if (!$selectedTime || $selectedTime->format('H:i') !== $bookingTime) {
    redirectWithStatus('error', 'Selected time is invalid.');
}

$now = new DateTime('now');
$bookingDateTime = DateTime::createFromFormat('Y-m-d H:i', $bookingDate . ' ' . $bookingTime);

if (!$bookingDateTime || $bookingDateTime < $now) {
    redirectWithStatus('error', 'Please select a future date and time.');
}

$db = $config['db'] ?? [];
$mailConfig = $config['mail'] ?? [];
$googleCalendarConfig = $config['google_calendar'] ?? [];

mysqli_report(MYSQLI_REPORT_OFF);

$dbHost = trim((string) ($db['host'] ?? 'localhost'));
$dbPort = (int) ($db['port'] ?? 3306);
$dbUser = (string) ($db['username'] ?? 'root');
$dbPass = (string) ($db['password'] ?? '');
$dbName = (string) ($db['database'] ?? '');

$hostCandidates = array_values(array_unique(array_filter([
    $dbHost,
    $dbHost === '127.0.0.1' ? 'localhost' : null,
    $dbHost === 'localhost' ? '127.0.0.1' : null,
])));

$mysqli = null;
$lastConnectError = '';

foreach ($hostCandidates as $hostCandidate) {
    $connection = @new mysqli(
        $hostCandidate,
        $dbUser,
        $dbPass,
        $dbName,
        $dbPort
    );

    if (!$connection->connect_errno) {
        $mysqli = $connection;
        break;
    }

    $lastConnectError = sprintf(
        '[%s:%d] (%d) %s',
        $hostCandidate,
        $dbPort,
        $connection->connect_errno,
        $connection->connect_error
    );
}

if (!$mysqli instanceof mysqli) {
    error_log('Book call DB connection failed: ' . $lastConnectError);
    redirectWithStatus('error', 'Database connection failed. Please check host, database name, username, and password in book-call-config.php.');
}

$mysqli->set_charset('utf8mb4');

$createTableSql = "CREATE TABLE IF NOT EXISTS bookcall (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(25) NOT NULL,
    booking_date DATE NOT NULL,
    booking_time TIME NOT NULL,
    booking_datetime DATETIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (!$mysqli->query($createTableSql)) {
    $mysqli->close();
    redirectWithStatus('error', 'Could not create the bookcall table in MySQL.');
}

$mysqli->query('ALTER TABLE bookcall ADD UNIQUE KEY unique_booking_slot (booking_date, booking_time)');

$bookingDateForDb = $bookingDateTime->format('Y-m-d');
$bookingTimeForDb = $bookingDateTime->format('H:i:s');
$bookingDateTimeForDb = $bookingDateTime->format('Y-m-d H:i:s');

$slotCheck = $mysqli->prepare('SELECT id FROM bookcall WHERE booking_date = ? AND booking_time = ? LIMIT 1');

if (!$slotCheck) {
    $mysqli->close();
    redirectWithStatus('error', 'Could not verify the selected slot.');
}

$slotCheck->bind_param('ss', $bookingDateForDb, $bookingTimeForDb);
$slotCheck->execute();
$slotCheck->store_result();

if ($slotCheck->num_rows > 0) {
    $slotCheck->close();
    $mysqli->close();
    redirectWithStatus('error', 'This date and time is already booked. Please select another slot.');
}

$slotCheck->close();

$insert = $mysqli->prepare(
    'INSERT INTO bookcall (name, email, phone, booking_date, booking_time, booking_datetime) VALUES (?, ?, ?, ?, ?, ?)'
);

if (!$insert) {
    $mysqli->close();
    redirectWithStatus('error', 'Could not prepare the booking save query.');
}

$insert->bind_param(
    'ssssss',
    $name,
    $email,
    $phone,
    $bookingDateForDb,
    $bookingTimeForDb,
    $bookingDateTimeForDb
);

if (!$insert->execute()) {
    $insert->close();
    $mysqli->close();
    redirectWithStatus('error', 'This slot may already be booked. Please choose another date or time and try again.');
}

$insert->close();
$mysqli->close();

$formattedDate = $bookingDateTime->format('d M Y');
$formattedTime = $bookingDateTime->format('H:i');
$mailProblem = false;
$meetData = null;
$meetProblem = false;
$meetMessage = '';

if (googleCalendarIsReady($googleCalendarConfig)) {
    list($meetData, $meetError) = createGoogleMeetLink($googleCalendarConfig, $bookingDateTime, $name, $email);

    if (!$meetData) {
        $meetProblem = true;
        $meetMessage = $meetError ?: 'Google Meet link could not be created.';
        error_log('Book call Google Meet error: ' . $meetMessage);
    }
}

$smtpReady = !empty($mailConfig['host']) && !empty($mailConfig['username']) && !empty($mailConfig['password']);

if ($smtpReady) {
    require __DIR__ . '/PHPMailer/PHPMailerAutoload.php';
    require __DIR__ . '/PHPMailer/class.phpmailer.php';
    require __DIR__ . '/PHPMailer/class.smtp.php';

    $meetSectionAdmin = '';
    $meetSectionClient = '';
    $safeName = htmlspecialchars($name);
    $safeEmail = htmlspecialchars($email);
    $safePhone = htmlspecialchars($phone);
    $safeFormattedDate = htmlspecialchars($formattedDate);
    $safeFormattedTime = htmlspecialchars($formattedTime);
    $safeSubmittedAt = htmlspecialchars((new DateTime('now'))->format('d M Y H:i'));

    if (!empty($meetData['meet_link'])) {
        $safeMeetLink = htmlspecialchars($meetData['meet_link']);
        $meetSectionAdmin = '
        <tr>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;width:180px;">Google Meet Link</td>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;"><a href="' . $safeMeetLink . '" style="color:#0f766e;text-decoration:none;">Join Google Meet</a></td>
        </tr>
        <tr>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;">Meeting Duration</td>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;">' . (int) ($meetData['duration_minutes'] ?? 30) . ' minutes</td>
        </tr>
    ';
        $meetSectionClient = '
        <tr>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;width:180px;">Google Meet Link</td>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;"><a href="' . $safeMeetLink . '" style="color:#0f766e;text-decoration:none;">Join Google Meet</a></td>
        </tr>
        <tr>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;">Meeting Note</td>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;">Please join the call using the above link at your selected time.</td>
        </tr>
    ';
    } elseif (googleCalendarIsReady($googleCalendarConfig)) {
        $meetSectionAdmin = '
        <tr>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;width:180px;">Google Meet Link</td>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;">Could not be created automatically. Please create it manually.</td>
        </tr>
    ';
        $meetSectionClient = '
        <tr>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;width:180px;">Google Meet Link</td>
            <td style="padding:12px 16px;border:1px solid #d9e2ec;">We could not attach the Google Meet link automatically right now. Our team will share it with you shortly.</td>
        </tr>
    ';
    }

    $adminBody = '
        <div style="margin:0;padding:24px;background:#f4f7fb;font-family:Arial,sans-serif;color:#102a43;">
            <table role="presentation" style="width:100%;max-width:700px;margin:0 auto;border-collapse:collapse;background:#ffffff;border:1px solid #d9e2ec;">
                <tr>
                    <td style="padding:24px 28px;background:linear-gradient(135deg,#0f766e,#155e75);color:#ffffff;">
                        <h2 style="margin:0;font-size:26px;line-height:1.3;">New Book A Call Request</h2>
                        <p style="margin:8px 0 0;font-size:14px;opacity:0.95;">A new booking has been submitted from the Technofra website.</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding:24px 28px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;font-size:14px;">
                            <tr>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;width:180px;">Name</td>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;">' . $safeName . '</td>
                            </tr>
                            <tr>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;">Email</td>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;">' . $safeEmail . '</td>
                            </tr>
                            <tr>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;">Phone</td>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;">' . $safePhone . '</td>
                            </tr>
                            <tr>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;">Booking Date</td>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;">' . $safeFormattedDate . '</td>
                            </tr>
                            <tr>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;">Booking Time</td>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;">' . $safeFormattedTime . '</td>
                            </tr>
                            ' . $meetSectionAdmin . '
                            <tr>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;">Submitted At</td>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;">' . $safeSubmittedAt . '</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    ';

    $clientBody = '
        <div style="margin:0;padding:24px;background:#f4f7fb;font-family:Arial,sans-serif;color:#102a43;">
            <table role="presentation" style="width:100%;max-width:700px;margin:0 auto;border-collapse:collapse;background:#ffffff;border:1px solid #d9e2ec;">
                <tr>
                    <td style="padding:24px 28px;background:linear-gradient(135deg,#14532d,#15803d);color:#ffffff;">
                        <h2 style="margin:0;font-size:26px;line-height:1.3;">Booking Confirmed</h2>
                        <p style="margin:8px 0 0;font-size:14px;opacity:0.95;">Thank you for booking a call with Technofra.</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding:24px 28px;">
                        <p style="margin:0 0 16px;font-size:15px;">Hi ' . $safeName . ',</p>
                        <p style="margin:0 0 20px;font-size:14px;line-height:1.7;">We have received your booking request successfully. Here are your call details.</p>
                        <table role="presentation" style="width:100%;border-collapse:collapse;font-size:14px;">
                            <tr>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;width:180px;">Booking Date</td>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;">' . $safeFormattedDate . '</td>
                            </tr>
                            <tr>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;background:#f8fafc;font-weight:700;">Booking Time</td>
                                <td style="padding:12px 16px;border:1px solid #d9e2ec;">' . $safeFormattedTime . '</td>
                            </tr>
                            ' . $meetSectionClient . '
                        </table>
                        <p style="margin:20px 0 0;font-size:14px;line-height:1.7;">Our team will connect with you shortly.</p>
                        <p style="margin:16px 0 0;font-size:14px;line-height:1.7;">Regards,<br>Technofra Team</p>
                    </td>
                </tr>
            </table>
        </div>
    ';

    $adminMailer = new PHPMailer();
    $adminMailer->isSMTP();
    $adminMailer->Host = $mailConfig['host'];
    $adminMailer->SMTPAuth = true;
    $adminMailer->Username = $mailConfig['username'];
    $adminMailer->Password = $mailConfig['password'];
    $adminMailer->SMTPSecure = $mailConfig['encryption'] ?? 'tls';
    $adminMailer->Port = (int) ($mailConfig['port'] ?? 587);
    $adminMailer->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
    $adminMailer->addAddress($mailConfig['admin_email'], $mailConfig['admin_name'] ?? 'Admin');
    $adminMailer->addReplyTo($email, $name);
    $adminMailer->isHTML(true);
    $adminMailer->Subject = 'New Book A Call Request';
    $adminMailer->Body = $adminBody;

    $clientMailer = new PHPMailer();
    $clientMailer->isSMTP();
    $clientMailer->Host = $mailConfig['host'];
    $clientMailer->SMTPAuth = true;
    $clientMailer->Username = $mailConfig['username'];
    $clientMailer->Password = $mailConfig['password'];
    $clientMailer->SMTPSecure = $mailConfig['encryption'] ?? 'tls';
    $clientMailer->Port = (int) ($mailConfig['port'] ?? 587);
    $clientMailer->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
    $clientMailer->addAddress($email, $name);
    $clientMailer->isHTML(true);
    $clientMailer->Subject = 'Thank you for booking a call with Technofra';
    $clientMailer->Body = $clientBody;

    if (!$adminMailer->send() || !$clientMailer->send()) {
        $mailProblem = true;
    }
} else {
    $mailProblem = true;
}

if ($mailProblem) {
    redirectWithStatus('success', 'Booking saved successfully. Please add SMTP details in book-call-config.php to enable admin and thank-you emails.');
}

if ($meetProblem) {
    redirectWithStatus('success', 'Booking submitted successfully and confirmation emails were sent, but Google Meet link could not be created automatically. Please check Google Calendar settings in book-call-config.php.');
}

redirectWithStatus('success', 'Booking submitted successfully. We have also sent confirmation emails.');
