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

mysqli_report(MYSQLI_REPORT_OFF);

$mysqli = new mysqli(
    $db['host'] ?? '127.0.0.1',
    $db['username'] ?? 'root',
    $db['password'] ?? '',
    $db['database'] ?? '',
    (int) ($db['port'] ?? 3306)
);

if ($mysqli->connect_errno) {
    redirectWithStatus('error', 'Database connection failed. Please check database name, username, and password in book-call-config.php.');
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

$smtpReady = !empty($mailConfig['host']) && !empty($mailConfig['username']) && !empty($mailConfig['password']);

if ($smtpReady) {
    require __DIR__ . '/PHPMailer/PHPMailerAutoload.php';
    require __DIR__ . '/PHPMailer/class.phpmailer.php';
    require __DIR__ . '/PHPMailer/class.smtp.php';

    $adminBody = '
        <h2>New Book A Call Request</h2>
        <p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>
        <p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
        <p><strong>Phone:</strong> ' . htmlspecialchars($phone) . '</p>
        <p><strong>Booking Date:</strong> ' . htmlspecialchars($formattedDate) . '</p>
        <p><strong>Booking Time:</strong> ' . htmlspecialchars($formattedTime) . '</p>
        <p><strong>Submitted At:</strong> ' . htmlspecialchars((new DateTime('now'))->format('d M Y H:i')) . '</p>
    ';

    $clientBody = '
        <h2>Thank you for booking a call with Technofra</h2>
        <p>Hi ' . htmlspecialchars($name) . ',</p>
        <p>We have received your booking request successfully.</p>
        <p><strong>Date:</strong> ' . htmlspecialchars($formattedDate) . '</p>
        <p><strong>Time:</strong> ' . htmlspecialchars($formattedTime) . '</p>
        <p>Our team will connect with you shortly.</p>
        <p>Regards,<br>Technofra Team</p>
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

redirectWithStatus('success', 'Booking submitted successfully. We have also sent confirmation emails.');
