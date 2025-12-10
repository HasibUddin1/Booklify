<?php
include_once __DIR__ . "/db_connection.php";

$searchResults = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Trim + Clean
    $destination = strtolower(trim($_POST['destination'] ?? ''));
    $adults = intval($_POST['adults'] ?? 1);
    $children = intval($_POST['children'] ?? 0);
    $totalGuests = $adults + $children;

    // Debug check
    // echo "<pre>"; var_dump($destination, $totalGuests); exit;

    if (!empty($destination)) {

        $destinationEscaped = mysqli_real_escape_string($conn, $destination);

        $sql = "
            SELECT * FROM hotels 
            WHERE LOWER(destination) LIKE '%$destinationEscaped%'
            AND max_guests >= $totalGuests
        ";

        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $searchResults[] = $row;
            }
        }
    }
}
