<!-- Banner Section -->
<section class="banner_section">
    <div class="bg-[#003a95]">
        <div class="max-w-6xl mx-auto pt-[64px] pb-[78px] px-5 sm:px-0">
            <h2 class="text-white hero_text font-bold text-2xl sm:text-3xl md:text-4xl">Find your next stay</h2>
            <p class="text-white text-lg sm:text-xl md:text-2xl mt-2">Search deals on hotels, homes, and much more...</p>
        </div>
    </div>

    <!-- Search Container -->
    <form method="POST" action="" class="search_section flex flex-col md:flex-row w-full max-w-6xl mx-auto gap-2 md:gap-0 border-2 border-yellow-400 bg-white rounded-lg -mt-12 sm:-mt-14 md:-mt-16 p-2 md:p-0">

        <!-- Destination Input -->
        <div class="relative flex-1 border-2 border-yellow-400 p-2 bg-white rounded-md md:rounded-none md:rounded-l-lg">
            <input
                type="text"
                name="destination"
                id="destinationInput"
                placeholder="Where are you going?"
                class="w-full focus:outline-none bg-white text-sm sm:text-base"
                autocomplete="off" />
            <div id="destinationSuggestions" class="absolute top-full left-0 w-full bg-white border border-gray-300 shadow-lg mt-1 hidden z-10"></div>
        </div>

        <!-- Guests & Rooms -->
        <div class="relative flex-1 border-2 border-yellow-400 p-2 bg-white rounded-md md:rounded-none md:rounded-l-none md:rounded-r-none">
            <button type="button" id="dropdownButton" class="w-full text-left cursor-pointer text-sm sm:text-base">
                Guests & Rooms
            </button>
            <div id="dropdownMenu" class="absolute top-full left-0 w-full bg-white border border-gray-300 shadow-lg mt-1 hidden p-2 z-10">

                <!-- Adults -->
                <div class="flex justify-between items-center py-1">
                    <span class="text-sm sm:text-base">Adults</span>
                    <div class="flex items-center space-x-2">
                        <button type="button" onclick="updateCount('adults', -1)" class="px-2 py-1 bg-gray-200 rounded">-</button>
                        <span id="adultsCount" class="px-1">1</span>
                        <button type="button" onclick="updateCount('adults', 1)" class="px-2 py-1 bg-gray-200 rounded">+</button>
                    </div>
                </div>

                <!-- Children -->
                <div class="flex justify-between items-center py-1">
                    <span class="text-sm sm:text-base">Children</span>
                    <div class="flex items-center space-x-2">
                        <button type="button" onclick="updateCount('children', -1)" class="px-2 py-1 bg-gray-200 rounded">-</button>
                        <span id="childrenCount" class="px-1">0</span>
                        <button type="button" onclick="updateCount('children', 1)" class="px-2 py-1 bg-gray-200 rounded">+</button>
                    </div>
                </div>

                <!-- Rooms -->
                <div class="flex justify-between items-center py-1">
                    <span class="text-sm sm:text-base">Rooms</span>
                    <div class="flex items-center space-x-2">
                        <button type="button" onclick="updateCount('rooms', -1)" class="px-2 py-1 bg-gray-200 rounded">-</button>
                        <span id="roomsCount" class="px-1">1</span>
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
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 border-2 border-yellow-400 rounded-md md:rounded-none md:rounded-r-lg text-sm sm:text-base">
            Search
        </button>

    </form>
</section>

<!-- Search Result -->
<?php include_once "search_result.php"; ?>