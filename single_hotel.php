<?php
// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// DB CONNECTION
include_once "core/db_connection.php";

// Validate ID
$hotelId = intval($_GET['id'] ?? 0);
if ($hotelId <= 0) {
    die("Invalid hotel ID.");
}

// Fetch hotel data
$sql = "SELECT * FROM hotels WHERE id = $hotelId LIMIT 1";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    die("Hotel not found.");
}

$hotel = $result->fetch_assoc();

// Decode JSON fields
$images = json_decode($hotel['images'], true) ?: [];
$facilities = json_decode($hotel['facilities'], true) ?: [];
$roomOptions = json_decode($hotel['room_options'], true) ?: [];
$reviews = json_decode($hotel['reviews'], true) ?: [];
$nearbyRestaurants = json_decode($hotel['nearby_restaurants'], true) ?: [];
$houseRules = json_decode($hotel['house_rules'], true) ?: [];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $pageInfo = ["title" => "Home - Hotel"]; ?>
    <?php include_once "includes/head.php"; ?>
</head>

<body class="bg-gray-100">

    <?php include_once "includes/nav.php"; ?>

    <!-- Container -->
    <div class="max-w-6xl mx-auto p-6">

        <!-- Hotel Name -->
        <h1 class="text-4xl font-bold mb-4"><?php echo $hotel['name']; ?></h1>
        <p class="text-gray-600 mb-6"><?php echo $hotel['location']; ?> • <?php echo $hotel['destination']; ?></p>

        <!-- Image Gallery -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-10">
            <?php foreach ($images as $img): ?>
                <div class="h-60 overflow-hidden rounded-lg">
                    <img src="<?php echo $img; ?>" class="w-full h-full object-cover">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Basic Info -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="text-2xl font-semibold mb-3">Description</h2>
            <p class="text-gray-700"><?php echo $hotel['description']; ?></p>

            <p class="mt-4"><strong>Max Guests:</strong> <?php echo $hotel['max_guests']; ?></p>
            <p><strong>Available Rooms:</strong> <?php echo $hotel['available_rooms']; ?></p>
            <p><strong>Available From:</strong> <?php echo $hotel['available_from']; ?></p>
            <p><strong>Available To:</strong> <?php echo $hotel['available_to']; ?></p>
        </div>

        <!-- Facilities -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="text-2xl font-semibold mb-4">Facilities</h2>
            <ul class="list-disc ml-6 text-gray-700">
                <?php foreach ($facilities as $f): ?>
                    <li><?php echo $f; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Room Options -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="text-2xl font-semibold mb-4">Room Options</h2>
            <?php foreach ($roomOptions as $room): ?>
                <div class="border p-4 rounded mb-3">
                    <p><strong>Type:</strong> <?php echo $room['type']; ?></p>
                    <p><strong>Price:</strong> $<?php echo $room['price']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Nearby Restaurants -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="text-2xl font-semibold mb-4">Nearby Restaurants</h2>
            <ul class="list-disc ml-6 text-gray-700">
                <?php foreach ($nearbyRestaurants as $r): ?>
                    <li><?php echo $r; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Reviews -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="text-2xl font-semibold mb-4">Reviews</h2>

            <?php if (count($reviews) == 0): ?>
                <p class="text-gray-500">No reviews yet.</p>
            <?php else: ?>
                <?php foreach ($reviews as $review): ?>
                    <div class="border rounded p-4 mb-4">
                        <p><strong><?php echo $review['user']; ?></strong> ⭐ <?php echo $review['rating']; ?>/5</p>
                        <p class="text-gray-700 mt-2"><?php echo $review['comment']; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- House Rules -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="text-2xl font-semibold mb-4">House Rules</h2>

            <p><strong>Check-in:</strong> <?php echo $houseRules['checkin'] ?? ''; ?></p>
            <p><strong>Check-out:</strong> <?php echo $houseRules['checkout'] ?? ''; ?></p>
            <p><strong>Children:</strong> <?php echo $houseRules['children'] ?? ''; ?></p>
            <p><strong>Age Restriction:</strong> <?php echo $houseRules['age_restriction'] ?? ''; ?></p>
            <p><strong>Payment:</strong> <?php echo $houseRules['payment'] ?? ''; ?></p>
            <p><strong>Pets:</strong> <?php echo $houseRules['pets'] ?? ''; ?></p>
        </div>

        <!-- Book Now Button -->
        <div class="text-center mt-8 mb-12">
            <?php if (!isset($_SESSION["user_id"])): ?>
                <button onclick="openLoginModal()"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 cursor-pointer">
                    Book Now
                </button>
            <?php else: ?>
                <a href="booking.php?hotel_id=<?= $hotel['id'] ?>"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 cursor-pointer">
                    Book Now
                </a>
            <?php endif; ?>
        </div>

    </div>

    <?php include_once "includes/footer.php"; ?>





    <!-- Premium Login Required Modal -->
    <div id="loginModal"
        class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 hidden">

        <div class="bg-white/20 dark:bg-gray-800/40 backdrop-blur-xl border border-white/30 dark:border-gray-700/40 
                w-full max-w-md rounded-3xl shadow-2xl p-8 animate-premiumScale">

            <!-- Icon -->
            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-blue-600/20 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-10 w-10 text-blue-600 dark:text-blue-400"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm-4 4v4m-7-4h14" />
                </svg>
            </div>

            <!-- Title -->
            <h2 class="text-2xl font-bold text-center text-gray-900 dark:text-gray-100 mb-2">
                Login Required
            </h2>

            <!-- Message -->
            <p class="text-center text-gray-700 dark:text-gray-300 mb-6">
                You need to log in before booking this hotel.
            </p>

            <!-- Buttons -->
            <div class="flex justify-center gap-4">
                <button onclick="closeLoginModal()"
                    class="px-5 py-2.5 rounded-xl bg-white/40 dark:bg-gray-700/40 border border-white/30 dark:border-gray-600 
                       text-gray-900 dark:text-gray-100 hover:bg-white/60 dark:hover:bg-gray-700/60 transition cursor-pointer">
                    Cancel
                </button>

                <a href="login.php"
                    class="px-5 py-2.5 rounded-xl bg-blue-600 text-white shadow hover:bg-blue-700 
                      transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M15 3h4v4m0-4L9 13m-4 4h4m0 0v4m0-4l10-10" />
                    </svg>
                    Login
                </a>
            </div>
        </div>
    </div>




    <?php include_once "includes/scripts.php"; ?>

</body>

</html>