<!-- Fetching Destinations -->
<script>
    // DOM elements
    const destinationInput = document.getElementById('destinationInput');
    const suggestionsBox = document.getElementById('destinationSuggestions');

    let destinations = [];

    // Fetch destinations from backend PHP
    fetch('core/destination.php')
        .then(res => res.json())
        .then(data => destinations = data)
        .catch(err => console.error('Error fetching destinations:', err));

    // Show suggestions on input
    destinationInput.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();

        if (!query) {
            suggestionsBox.classList.add('hidden');
            return;
        }

        const filtered = destinations.filter(dest => dest.toLowerCase().includes(query));

        suggestionsBox.innerHTML = '';

        if (filtered.length === 0) {
            suggestionsBox.classList.add('hidden');
            return;
        }

        filtered.forEach(dest => {
            const div = document.createElement('div');
            div.className = 'p-2 hover:bg-gray-100 cursor-pointer';
            div.textContent = dest;

            // Add click listener safely
            div.addEventListener('click', () => {
                destinationInput.value = dest;
                suggestionsBox.classList.add('hidden');
            });

            suggestionsBox.appendChild(div);
        });

        suggestionsBox.classList.remove('hidden');
    });

    // Hide dropdown if clicked outside
    document.addEventListener('click', function(e) {
        if (!destinationInput.contains(e.target) && !suggestionsBox.contains(e.target)) {
            suggestionsBox.classList.add('hidden');
        }
    });
</script>




<!-- Searchbar Dropdown toggle main-js -->
<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // // Date picker dropdown
    // const dateButton = document.getElementById('dateButton');
    // const dateDropdown = document.getElementById('dateDropdown');

    // dateButton.addEventListener('click', () => {
    //     dateDropdown.classList.toggle('hidden');
    // });

    // const applyDates = document.getElementById('applyDates');
    // const checkin = document.getElementById('checkin');
    // const checkout = document.getElementById('checkout');

    // applyDates.addEventListener('click', () => {
    //     const ci = checkin.value;
    //     const co = checkout.value;
    //     if (ci && co) {
    //         dateButton.innerText = `${ci} - ${co}`;
    //         document.getElementById('checkin_hidden').value = ci;
    //         document.getElementById('checkout_hidden').value = co;
    //     }
    //     dateDropdown.classList.add('hidden');
    // });

    // Quantity counters
    const counts = {
        adults: 1,
        children: 0,
        rooms: 1
    };

    function updateCount(type, delta) {
        counts[type] += delta;
        if (counts[type] < 0) counts[type] = 0;
        document.getElementById(type + 'Count').innerText = counts[type];
        document.getElementById(type + '_hidden').value = counts[type];
    }

    const msgBox = document.getElementById('msgBox');
    if (msgBox) {
        setTimeout(() => {
            msgBox.style.display = 'none';
            // Optional: Remove URL param after showing
            if (window.history.replaceState) {
                const url = window.location.href.split('?')[0];
                window.history.replaceState({}, document.title, url);
            }
        }, 5000); // 5 seconds
    }
</script>


<!-- Login Modal JS -->
<script>
    function openLoginModal() {
        document.getElementById("loginModal").classList.remove("hidden");
    }

    function closeLoginModal() {
        document.getElementById("loginModal").classList.add("hidden");
    }
</script>



<!-- Successful Booking Modal -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if booking was successful (from PHP)
        <?php if ($success): ?>
            const modal = document.getElementById('bookingSuccessModal');
            const message = document.getElementById('bookingSuccessMessage');
            message.textContent = "Your booking has been confirmed!"; // optional, dynamic message
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.querySelector('div').classList.remove('scale-90');
                modal.querySelector('div').classList.add('scale-100');
            }, 10);

            // Close modal on button click
            document.getElementById('closeBookingSuccessModal').addEventListener('click', function() {
                modal.querySelector('div').classList.remove('scale-100');
                modal.querySelector('div').classList.add('scale-90');
                setTimeout(() => modal.classList.add('hidden'), 200);
            });
        <?php endif; ?>
    });
</script>