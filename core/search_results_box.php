<?php
include_once "core/db_connection.php";

$searchResults = []; // empty by default

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destination = mysqli_real_escape_string($conn, $_POST['destination'] ?? '');
    $checkIn = $_POST['checkin_date'] ?? '';
    $checkOut = $_POST['checkout_date'] ?? '';
    $adults = intval($_POST['adults'] ?? 1);
    $children = intval($_POST['children'] ?? 0);
    $totalGuests = $adults + $children;

    $sql = "SELECT * FROM hotels 
            WHERE destination LIKE '%$destination%'
            AND available_from <= '$checkIn'
            AND available_to >= '$checkOut'
            AND max_guests >= $totalGuests";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $searchResults[] = $row;
        }
    }
}
