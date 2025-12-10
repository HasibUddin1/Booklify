<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
?>

<section class="header_section bg-[#003a95]">
    <nav class="pt-4">
        <div class="max-w-6xl mx-auto sticky_nav">

            <div class="flex justify-between items-center pe-4 md:px-0">
                <div class="pb-4">
                    <a class="no-underline text-2xl brand_name text-white" href="index.php">
                        <?= SITE_NAME ?>
                    </a>
                </div>

                <!-- login part -->
                <div class="hidden md:flex space-x-2">
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <a class="bg-white nav_link_auth px-2 py-1 text-[14px] rounded-sm font-semibold" href="dashboard/index">Dashboard</a>
                    <?php } else { ?>
                        <a class="bg-white nav_link_auth px-2 py-1 text-[14px] rounded-sm font-semibold" href="login">Login</a>
                        <a class="bg-white nav_link_auth px-2 py-1 text-[14px] rounded-sm font-semibold" href="register">Register</a>
                    <?php } ?>
                </div>

                <!-- Mobile Hamburger -->
                <div class="md:hidden">
                    <button id="mobileMenuButton" class="text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="nav-links-container text-white pb-3 md:flex hidden">
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

            <!-- Mobile links -->
            <div id="mobileNavLinks" class="hidden flex-col text-white space-y-2 pb-3">

                <a class="nav_link px-4 py-[11px] text-white rounded-full hover:bg-[#1a4fa1] block" href="index.php">Stays</a>
                <a class="nav_link px-4 py-[11px] text-white rounded-full hover:bg-[#1a4fa1] block" href="flights.php">Flights</a>
                <a class="nav_link px-4 py-[11px] text-white rounded-full hover:bg-[#1a4fa1] block" href="car_rental.php">Car Rental</a>
                <a class="nav_link px-4 py-[11px] text-white rounded-full hover:bg-[#1a4fa1] block" href="attractions.php">Attractions</a>
                <a class="nav_link px-4 py-[11px] text-white rounded-full hover:bg-[#1a4fa1] block" href="airport.php">Airport taxis</a>
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <a class="bg-white nav_link_auth px-2 py-1 text-[14px] rounded-sm font-semibold block w-fit ms-4" href="dashboard/index">Dashboard</a>
                <?php } else { ?>
                    <a class="bg-white text-black nav_link_auth px-2 py-1 text-[14px] rounded-sm font-semibold block w-fit ms-4" href="login">Login</a>
                    <a class="bg-white text-black nav_link_auth px-2 py-1 text-[14px] rounded-sm font-semibold block w-fit ms-4" href="register">Register</a>
                <?php } ?>
            </div>

        </div>
    </nav>
</section>

<script>
    // Sticky Header
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

    // Mobile toggle
    const mobileButton = document.getElementById('mobileMenuButton');
    const mobileNavLinks = document.getElementById('mobileNavLinks');

    mobileButton.addEventListener('click', () => {
        mobileNavLinks.classList.toggle('hidden');
    });
</script>