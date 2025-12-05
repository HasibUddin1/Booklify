<?php
include_once "../config/db_connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize and get POST data
    $destination = mysqli_real_escape_string($conn, $_POST['destination'] ?? '');
    $checkin = $_POST['checkin_date'] ?? '';
    $checkout = $_POST['checkout_date'] ?? '';
    $adults = (int)($_POST['adults'] ?? 1);
    $children = (int)($_POST['children'] ?? 0);
    $rooms = (int)($_POST['rooms'] ?? 1);

    // Validate required fields
    if (!$destination || !$checkin || !$checkout) {
        die("Destination, Check-in and Check-out are required.");
    }

    // Insert into database
    $sql = "INSERT INTO bookings (destination, checkin, checkout, adults, children, rooms)
            VALUES ('$destination', '$checkin', '$checkout', $adults, $children, $rooms)";

    if (mysqli_query($conn, $sql)) {
        echo "<h2 class='text-green-600'>Booking successfully saved!</h2>";
        echo "<p>Destination: $destination</p>";
        echo "<p>Check-in: $checkin</p>";
        echo "<p>Check-out: $checkout</p>";
        echo "<p>Adults: $adults</p>";
        echo "<p>Children: $children</p>";
        echo "<p>Rooms: $rooms</p>";
    } else {
        echo "<p class='text-red-600'>Error: " . mysqli_error($conn) . "</p>";
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
