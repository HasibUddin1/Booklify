<?php
session_start();
include_once "core/db_connection.php";

// Logged in check
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Get hotel ID from URL
$hotel_id = intval($_GET['hotel_id'] ?? 0);
$user_id = $_SESSION['user_id'];

if ($hotel_id <= 0) {
    die("Invalid hotel.");
}

// Fetch hotel info
$sql = "SELECT * FROM hotels WHERE id = $hotel_id LIMIT 1";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    die("Hotel not found.");
}

$hotel = $result->fetch_assoc();

// Handle booking submission
$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $checkin = $_POST['checkin'] ?? null;
    $checkout = $_POST['checkout'] ?? null;
    $adults = intval($_POST['adults'] ?? 1);
    $children = intval($_POST['children'] ?? 0);
    $rooms = intval($_POST['rooms'] ?? 1);
    $totalGuests = $adults + $children;

    // Check max guests
    if ($totalGuests > $hotel['max_guests']) {
        $error = "Total guests exceed maximum allowed for this hotel.";
    } else {
        $stmt = $conn->prepare("INSERT INTO bookings (user_id, hotel_id, checkin_date, checkout_date, guests, rooms) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iissii", $user_id, $hotel_id, $checkin, $checkout, $totalGuests, $rooms);
        if ($stmt->execute()) {
            $success = true;
        } else {
            $error = "Booking failed. Please try again.";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $pageInfo = ["title" => "Confirm Booking"]; ?>
    <?php include_once "includes/head.php"; ?>
</head>

<body class="bg-gray-100">

    <?php include_once "includes/nav.php"; ?>

    <div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg">

        <h1 class="text-2xl font-bold mb-4">Book <?= htmlspecialchars($hotel['name']) ?></h1>

        <?php if (!empty($error)): ?>
            <div class="bg-red-200 text-red-800 p-3 rounded mb-4"><?= $error ?></div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
                Booking successful!
            </div>
        <?php endif; ?>

        <div class="mb-6">
            <p><strong>Location:</strong> <?= htmlspecialchars($hotel['location']) ?></p>
            <p><strong>Max Guests:</strong> <?= $hotel['max_guests'] ?></p>
            <p class="mt-2"><?= htmlspecialchars($hotel['description']) ?></p>
        </div>

        <form method="POST" class="space-y-4">

            <div class="flex gap-4">
                <div class="flex-1">
                    <label class="block mb-1 font-semibold">Check-in</label>
                    <input type="date" name="checkin" required class="w-full border rounded px-3 py-2">
                </div>
                <div class="flex-1">
                    <label class="block mb-1 font-semibold">Check-out</label>
                    <input type="date" name="checkout" required class="w-full border rounded px-3 py-2">
                </div>
            </div>

            <div class="flex gap-4">
                <div class="flex-1">
                    <label class="block mb-1 font-semibold">Adults</label>
                    <input type="number" name="adults" value="1" min="1" max="<?= $hotel['max_guests'] ?>" class="w-full border rounded px-3 py-2">
                </div>
                <div class="flex-1">
                    <label class="block mb-1 font-semibold">Children</label>
                    <input type="number" name="children" value="0" min="0" max="<?= $hotel['max_guests'] ?>" class="w-full border rounded px-3 py-2">
                </div>
                <div class="flex-1">
                    <label class="block mb-1 font-semibold">Rooms</label>
                    <input type="number" name="rooms" value="1" min="1" class="w-full border rounded px-3 py-2">
                </div>
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 cursor-pointer">
                Book Now
            </button>

        </form>
    </div>


    <?php include_once "includes/footer.php"; ?>

    <?php include_once "includes/scripts.php"; ?>
</body>

</html>