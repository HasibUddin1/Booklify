<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
?>


<section class="header_section bg-[#003a95]">
    <nav class="pt-4">
        <div class="max-w-6xl mx-auto sticky_nav">
            <div class="flex justify-between items-center pe-4 md:px-0">
                <div class="pb-4">
                    <a class="no-underline text-2xl brand_name text-white" href="index.php">
                        Dashboard
                    </a>
                </div>

                <!-- login part -->
                <div>

                    <a class="bg-white nav_link_auth px-2 py-1 text-[14px] rounded-sm font-semibold" href="../index">Home</a>

                </div>
            </div>



            <div class="nav-links-container text-white pb-3">
                <ul class="flex ps-0">
                    <li class="nav-item">
                        <a class="nav_link px-4 py-[11px] text-white rounded-full hover:bg-[#1a4fa1] <?php echo ($curPageName == 'index.php') ? 'border border-white bg-[#1a4fa1]' : ''; ?>" href="index.php">Stays</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav_link px-4 py-[11px] text-white rounded-full hover:bg-[#1a4fa1] <?php echo ($curPageName == 'flights.php') ? 'border border-white bg-[#1a4fa1]' : ''; ?>" href="flights.php">Flights</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav_link px-4 py-[11px] text-white rounded-full hover:bg-[#1a4fa1] <?php echo ($curPageName == 'car_rental.php') ? 'border border-white bg-[#1a4fa1]' : ''; ?>" href="car_rental.php">Car Rental</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav_link px-4 py-[11px] text-white rounded-full hover:bg-[#1a4fa1] <?php echo ($curPageName == 'attractions.php') ? 'border border-white bg-[#1a4fa1]' : ''; ?>" href="attractions.php">Attractions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav_link px-4 py-[11px] text-white rounded-full hover:bg-[#1a4fa1] <?php echo ($curPageName == 'airport.php') ? 'border border-white bg-[#1a4fa1]' : ''; ?>" href="airport.php">Airport taxis</a>
                    </li>
                </ul>
            </div>







        </div>

    </nav>
</section>


<script>
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.sticky_nav');
        if (window.scrollY > 50) {
            header.classList.add('stickyNav');
            header.classList.add('stickyNavMob');
        } else {
            header.classList.remove('stickyNav');
            header.classList.remove('stickyNavMob');
        }
    });
</script>