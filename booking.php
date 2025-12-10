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
        // Check for overlapping booking
        $stmt = $conn->prepare("
            SELECT * FROM bookings 
            WHERE user_id = ? AND hotel_id = ? 
            AND (checkin_date <= ? AND checkout_date >= ?)
        ");
        $stmt->bind_param("iiss", $user_id, $hotel_id, $checkout, $checkin);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "You already have a booking for this hotel during the selected dates.";
        } else {
            // Insert booking
            $stmtInsert = $conn->prepare("INSERT INTO bookings (user_id, hotel_id, checkin_date, checkout_date, guests, rooms) VALUES (?, ?, ?, ?, ?, ?)");
            $stmtInsert->bind_param("iissii", $user_id, $hotel_id, $checkin, $checkout, $totalGuests, $rooms);
            if ($stmtInsert->execute()) {
                $success = true;
            } else {
                $error = "Booking failed. Please try again.";
            }
            $stmtInsert->close();
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




    <!-- Booking Success Modal -->
    <div id="bookingSuccessModal"
        class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="bg-white/20 dark:bg-gray-800/40 backdrop-blur-xl border border-white/30 dark:border-gray-700/40 
        w-full max-w-md rounded-3xl shadow-2xl p-8 scale-90 transition-transform duration-200">

            <!-- Icon -->
            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-green-100 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-10 w-10 text-green-600"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 13l4 4L19 7" />
                </svg>
            </div>

            <!-- Title -->
            <h2 class="text-2xl font-bold text-center text-white mb-2">
                Booking Successful
            </h2>

            <!-- Message -->
            <p id="bookingSuccessMessage" class="text-center text-white mb-6">
                Your booking has been confirmed!
            </p>

            <!-- Close Button -->
            <div class="flex justify-center">
                <button id="closeBookingSuccessModal"
                    class="px-5 py-2.5 rounded-xl bg-green-600 text-white hover:bg-green-700 transition cursor-pointer">
                    OK
                </button>
            </div>
        </div>
    </div>



    <?php include_once "includes/scripts.php"; ?>
</body>

</html>