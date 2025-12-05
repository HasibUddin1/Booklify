<!-- jequery plugins -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-cuM2lN76mQRK5UV1K4ZOYgiRpjEYbj1KkJxJS3RbAO7yJoB8A/vcuwyCAy4wB0ZY" crossorigin="anonymous"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/validation.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/language.js"></script>

<!-- main-js -->
<script src="assets/js/script.js"></script>


<script>
    // Searchbar Dropdown toggle
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Date picker dropdown
    const dateButton = document.getElementById('dateButton');
    const dateDropdown = document.getElementById('dateDropdown');

    dateButton.addEventListener('click', () => {
        dateDropdown.classList.toggle('hidden');
    });

    const applyDates = document.getElementById('applyDates');
    const checkin = document.getElementById('checkin');
    const checkout = document.getElementById('checkout');

    applyDates.addEventListener('click', () => {
        const ci = checkin.value;
        const co = checkout.value;
        if(ci && co){
            dateButton.innerText = `${ci} - ${co}`;
            document.getElementById('checkin_hidden').value = ci;
            document.getElementById('checkout_hidden').value = co;
        }
        dateDropdown.classList.add('hidden');
    });

    // Quantity counters
    const counts = { adults: 1, children: 0, rooms: 1 };
    function updateCount(type, delta) {
        counts[type] += delta;
        if (counts[type] < 0) counts[type] = 0;
        document.getElementById(type + 'Count').innerText = counts[type];
        document.getElementById(type + '_hidden').value = counts[type];
    }
</script>