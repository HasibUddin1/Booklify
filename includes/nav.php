<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
?>

<style>
    
</style>


<section class="header_section header-section51">

    <div class="navtemplatesSec">

        <header class="">

            <nav class="pt-4">
                <div class="max-w-6xl mx-auto sticky_nav z-50">
                    <div class="pb-4">
                        <a class="no-underline" href="index.php">
                            <?= SITE_NAME ?>
                        </a>
                    </div>



                    <div class="nav-links-container">
                        <ul class="flex ps-0">
                            <li class="nav-item">
                                <a class="nav-link p-3" aria-current="page" href="index.php">Stays</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop.php">Flights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Car Rental</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Attractions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Airport taxis</a>
                            </li>
                        </ul>
                    </div>







                </div>

            </nav>

        </header>
    </div>
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