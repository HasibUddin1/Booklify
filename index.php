<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!doctype html>
<html lang="en">

<head>


    <?php
    $pageInfo = [
        "title" => "Home",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>

<body>


    <?php include_once "includes/nav.php"; ?>

    <!-- Banner Section -->
    <section class="banner_section bg-[#003a95]">
        <div class="max-w-6xl mx-auto pt-[64px] pb-[78px] px-[5px]">
            <h2 class="text-white hero_text font-bold">Find your next stay</h2>
            <p class="text-white text-2xl">Search deals on hotels, homes, and much more...</p>
        </div>

        <!-- Search Container -->
        <form method="POST" action="core/search_results.php" class="search_section flex w-full max-w-6xl mx-auto gap-0 border-2 border-yellow-400 bg-white rounded-lg">

            <!-- Destination -->
            <input type="text" name="destination" placeholder="Where are you going?" class="flex-1 border-2 border-yellow-400 p-2 focus:outline-none bg-white" />

            <!-- Check-in / Check-out -->
            <div class="relative flex-1 border-2 border-yellow-400 p-2 bg-white">
                <button type="button" id="dateButton" class="w-full text-left">
                    Check-in - Check-out
                </button>
                <div id="dateDropdown" class="absolute top-full left-0 w-full bg-white border border-gray-300 shadow-lg mt-1 hidden p-2 z-10">
                    <div class="flex flex-col gap-2">
                        <label>
                            Check-in:
                            <input type="date" id="checkin" class="border p-1 w-full" />
                        </label>
                        <label>
                            Check-out:
                            <input type="date" id="checkout" class="border p-1 w-full" />
                        </label>
                    </div>
                    <button type="button" id="applyDates" class="mt-2 bg-blue-600 text-white px-4 py-1 rounded">Apply</button>
                </div>

                <!-- Hidden fields -->
                <input type="hidden" name="checkin_date" id="checkin_hidden" />
                <input type="hidden" name="checkout_date" id="checkout_hidden" />
            </div>

            <!-- Guests & Rooms -->
            <div class="relative flex-1 border-2 border-yellow-400 p-2 bg-white">
                <button type="button" id="dropdownButton" class="w-full text-left">
                    Guests & Rooms
                </button>
                <div id="dropdownMenu" class="absolute top-full left-0 w-full bg-white border border-gray-300 shadow-lg mt-1 hidden p-2 z-10">

                    <!-- Adults -->
                    <div class="flex justify-between items-center py-1">
                        <span>Adults</span>
                        <div class="flex items-center space-x-2">
                            <button type="button" onclick="updateCount('adults', -1)" class="px-2 py-1 bg-gray-200 rounded">-</button>
                            <span id="adultsCount">1</span>
                            <button type="button" onclick="updateCount('adults', 1)" class="px-2 py-1 bg-gray-200 rounded">+</button>
                        </div>
                    </div>

                    <!-- Children -->
                    <div class="flex justify-between items-center py-1">
                        <span>Children</span>
                        <div class="flex items-center space-x-2">
                            <button type="button" onclick="updateCount('children', -1)" class="px-2 py-1 bg-gray-200 rounded">-</button>
                            <span id="childrenCount">0</span>
                            <button type="button" onclick="updateCount('children', 1)" class="px-2 py-1 bg-gray-200 rounded">+</button>
                        </div>
                    </div>

                    <!-- Rooms -->
                    <div class="flex justify-between items-center py-1">
                        <span>Rooms</span>
                        <div class="flex items-center space-x-2">
                            <button type="button" onclick="updateCount('rooms', -1)" class="px-2 py-1 bg-gray-200 rounded">-</button>
                            <span id="roomsCount">1</span>
                            <button type="button" onclick="updateCount('rooms', 1)" class="px-2 py-1 bg-gray-200 rounded">+</button>
                        </div>
                    </div>

                </div>

                <!-- Hidden fields -->
                <input type="hidden" name="adults" id="adults_hidden" value="1" />
                <input type="hidden" name="children" id="children_hidden" value="0" />
                <input type="hidden" name="rooms" id="rooms_hidden" value="1" />
            </div>

            <!-- Search Button -->
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 border-2 border-yellow-400">Search</button>

        </form>

    </section>







    <?php include_once "includes/footer.php"; ?>



    <?php include_once "includes/scripts.php"; ?>

</body>

</html>