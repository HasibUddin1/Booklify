<div class="max-w-6xl mx-auto p-6 mt-6">

    <!-- Section Header -->
    <div class="flex items-center mb-6">
        <div class="bg-blue-100 text-blue-600 rounded-full p-3 mr-4">
            <!-- Simple icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
        </div>
        <div>
            <h2 class="text-2xl font-bold text-gray-900">My Bookings</h2>
            <p class="text-gray-500 text-sm mt-1">View and manage all your hotel reservations in one place.</p>
        </div>
    </div>

    <!-- Table Container -->
    <div class="bg-white rounded-lg shadow p-4">
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
</div>
