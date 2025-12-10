<?php
session_start();
include_once "db_connection.php";

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'You must be logged in.']);
    exit;
}

// Get POST data
$data = json_decode(file_get_contents('php://input'), true);
$booking_id = intval($data['booking_id'] ?? 0);
$user_id = $_SESSION['user_id'];

// Validate
if ($booking_id <= 0) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid booking ID.']);
    exit;
}

// Delete booking if it belongs to this user
$stmt = $conn->prepare("DELETE FROM bookings WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $booking_id, $user_id);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Booking canceled successfully.']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to cancel booking.']);
}

$stmt->close();
$conn->close();
