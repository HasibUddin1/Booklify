<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
</script>
<script src="../assets/dist/js/dashboard.js"></script>


<!-- User Bookings -->
<script>
    document.addEventListener("DOMContentLoaded", function() {

        let bookingToCancel = null;

        function fetchBookings() {
            fetch('../core/get_bookings.php')
                .then(res => res.json())
                .then(data => {
                    const tbody = document.getElementById('bookingsBody');
                    tbody.innerHTML = '';

                    if (data.status === 'success' && data.data.length > 0) {
                        data.data.forEach(booking => {
                            const row = document.createElement('tr');
                            row.classList.add('hover:bg-gray-50');

                            row.innerHTML = `
                            <td class="px-4 py-2 text-sm text-gray-700">${booking.hotel_name}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">${booking.hotel_location}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">${booking.checkin_date}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">${booking.checkout_date}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">${booking.guests}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">${booking.rooms}</td>
                            <td class="px-4 py-2 text-sm text-red-600 cursor-pointer hover:underline"
                                onclick="cancelBooking(${booking.id})">
                                Cancel
                            </td>
                        `;
                            tbody.appendChild(row);
                        });
                    } else {
                        tbody.innerHTML = `<tr><td colspan="7" class="px-4 py-6 text-center text-gray-500">No bookings found.</td></tr>`;
                    }
                })
                .catch(err => console.error(err));
        }

        fetchBookings();

        // Open modal
        window.cancelBooking = function(bookingId) {
            bookingToCancel = bookingId;
            const modal = document.getElementById('cancelModal');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.querySelector('div').classList.remove('scale-90');
                modal.querySelector('div').classList.add('scale-100');
            }, 10);
        }

        // Close modal
        document.getElementById('cancelModalClose').addEventListener('click', function() {
            const modal = document.getElementById('cancelModal');
            modal.querySelector('div').classList.remove('scale-100');
            modal.querySelector('div').classList.add('scale-90');
            setTimeout(() => modal.classList.add('hidden'), 200);
            bookingToCancel = null;
        });

        // Confirm cancel
        document.getElementById('confirmCancelBooking').addEventListener('click', function() {
            if (!bookingToCancel) return;

            fetch('../core/cancel_booking.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        booking_id: bookingToCancel
                    })
                })
                .then(res => res.json())
                .then(data => {
                    const modal = document.getElementById('cancelModal');
                    modal.querySelector('div').classList.remove('scale-100');
                    modal.querySelector('div').classList.add('scale-90');
                    setTimeout(() => modal.classList.add('hidden'), 200);
                    bookingToCancel = null;

                    if (data.status === 'success') {
                        alert('Booking canceled successfully!');
                        fetchBookings();
                    } else {
                        alert(data.message || 'Failed to cancel booking.');
                    }
                })
                .catch(err => console.error(err));
        });
    });
</script>