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
                    <a class="bg-red-600 text-white nav_link_auth px-2 py-1 text-[14px] rounded-sm font-semibold" href="../core/logout">Log Out</a>

                </div>
            </div>



            <!-- Navlinks container -->







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