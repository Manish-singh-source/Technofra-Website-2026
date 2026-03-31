<?php

date_default_timezone_set('Asia/Kolkata');
header('Content-Type: application/json; charset=utf-8');

$configPath = __DIR__ . '/book-call-config.php';
if (!file_exists($configPath)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Booking configuration file is missing.']);
    exit;
}

$date = trim($_GET['date'] ?? '');
if ($date === '') {
    echo json_encode(['success' => true, 'slots' => []]);
    exit;
}

$selectedDate = DateTime::createFromFormat('Y-m-d', $date);
if (!$selectedDate || $selectedDate->format('Y-m-d') !== $date) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid date.']);
    exit;
}

$config = require $configPath;
$db = $config['db'] ?? [];

mysqli_report(MYSQLI_REPORT_OFF);

$mysqli = new mysqli(
    $db['host'] ?? '127.0.0.1',
    $db['username'] ?? 'root',
    $db['password'] ?? '',
    $db['database'] ?? '',
    (int) ($db['port'] ?? 3306)
);

if ($mysqli->connect_errno) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
    exit;
}

$mysqli->set_charset('utf8mb4');

$checkTable = $mysqli->query("SHOW TABLES LIKE 'bookcall'");
if (!$checkTable || $checkTable->num_rows === 0) {
    $mysqli->close();
    echo json_encode(['success' => true, 'slots' => []]);
    exit;
}

$stmt = $mysqli->prepare('SELECT booking_time FROM bookcall WHERE booking_date = ? ORDER BY booking_time ASC');
if (!$stmt) {
    $mysqli->close();
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Could not read booked slots.']);
    exit;
}

$stmt->bind_param('s', $date);
$stmt->execute();
$result = $stmt->get_result();

$slots = [];
while ($row = $result->fetch_assoc()) {
    $slots[] = substr($row['booking_time'], 0, 5);
}

$stmt->close();
$mysqli->close();

echo json_encode([
    'success' => true,
    'slots' => $slots,
]);
