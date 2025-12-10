<div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-6">

    <h2 class="text-2xl font-bold mb-4">My Bookings</h2>

    <!-- Table container -->
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200" id="bookingsTable">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Hotel Name</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Location</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Check-in</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Check-out</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Guests</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Rooms</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody id="bookingsBody" class="bg-white divide-y divide-gray-200">
                <!-- Bookings will be loaded here via AJAX -->
                <tr>
                    <td colspan="7" class="px-4 py-6 text-center text-gray-500">No bookings found</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>