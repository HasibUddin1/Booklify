<?php
// Path: core/get_bookings.php
session_start();
include_once "db_connection.php";

// Check if user is logged in
$user_id = $_SESSION['user_id'] ?? 0;

header('Content-Type: application/json');

if (!$user_id) {
    echo json_encode([
        'status' => 'error',
        'message' => 'User not logged in.'
    ]);
    exit;
}

// Fetch bookings for logged-in user
$sql = "
    SELECT b.*, h.name AS hotel_name, h.location AS hotel_location
    FROM bookings b
    JOIN hotels h ON b.hotel_id = h.id
    WHERE b.user_id = ?
    ORDER BY b.id DESC
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$bookings = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();

// Return as JSON
echo json_encode([
    'status' => 'success',
    'data' => $bookings
]);
