<?php
include_once "db_connection.php";


// Query for getting the destinations
$sql = "SELECT DISTINCT destination FROM hotels ORDER BY destination ASC";
$result = mysqli_query($conn, $sql);

$destinations = [];

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $destinations[] = $row['destination'];
    }
}

// Return JSON response
header("Content-Type: application/json");
echo json_encode($destinations);

mysqli_close($conn);
?>