<footer class="bg-[#003a95] text-white mt-12">
    <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">

        <!-- About -->
        <div>
            <h3 class="text-xl font-bold mb-4">Booklify</h3>
            <p class="text-gray-400 text-sm">
                Booklify helps you find the best hotels, flights, and car rentals for your perfect trip.
                Simple, fast, and reliable booking platform.
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-xl font-bold mb-4">Quick Links</h3>
            <ul class="space-y-2 text-gray-400 text-sm">
                <li><a href="index.php" class="hover:text-white transition">Stays</a></li>
                <li><a href="flights.php" class="hover:text-white transition">Flights</a></li>
                <li><a href="car_rental.php" class="hover:text-white transition">Car Rental</a></li>
                <li><a href="attractions.php" class="hover:text-white transition">Attractions</a></li>
                <li><a href="airport.php" class="hover:text-white transition">Airport Taxis</a></li>
            </ul>
        </div>

        <!-- Legal -->
        <div>
            <h3 class="text-xl font-bold mb-4">Legal</h3>
            <ul class="text-gray-400 text-sm space-y-2">
                <li><a href="terms.php" class="hover:text-white transition">Terms & Conditions</a></li>
                <li><a href="privacy.php" class="hover:text-white transition">Privacy Policy</a></li>
            </ul>
        </div>

        <!-- Contact & Social -->
        <div>
            <h3 class="text-xl font-bold mb-4">Contact & Follow</h3>
            <ul class="text-gray-400 text-sm space-y-2 mb-4">
                <li>Email: <a href="mailto:<?= SUPPORT_EMAIL ?>" class="hover:text-white transition"><?= SUPPORT_EMAIL ?></a></li>
                <li>Phone: <a href="tel:<?= PHONE ?>" class="hover:text-white transition"><?= PHONE ?></a></li>
                <li>Address: <?= ADDRESS ?></li>
            </ul>
            <div class="flex space-x-4">
                <!-- Social Icons -->
                <a href="#" class="hover:text-white transition" aria-label="Facebook">
                    <!-- SVG icon -->
                </a>
                <a href="#" class="hover:text-white transition" aria-label="Twitter">
                    <!-- SVG icon -->
                </a>
                <a href="#" class="hover:text-white transition" aria-label="Instagram">
                    <!-- SVG icon -->
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="bg-[#002f7a] text-white text-sm text-center py-4">
        &copy; <?= date("Y") ?> Made with love by Israt Jahan.
    </div>
</footer>