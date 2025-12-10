<!-- Footer -->
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
                <a href="#" class="hover:text-white transition" aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M22 12c0-5.522-4.478-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.988h-2.54v-2.89h2.54V9.797c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.196 2.238.196v2.462h-1.26c-1.243 0-1.63.772-1.63 1.562v1.875h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                    </svg>
                </a>
                <a href="#" class="hover:text-white transition" aria-label="Twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.22 4.22 0 0 0 1.85-2.33 8.41 8.41 0 0 1-2.66 1.02 4.2 4.2 0 0 0-7.15 3.83 11.9 11.9 0 0 1-8.64-4.38 4.2 4.2 0 0 0 1.3 5.6A4.19 4.19 0 0 1 2 10.43v.05a4.2 4.2 0 0 0 3.36 4.11 4.23 4.23 0 0 1-1.89.07 4.2 4.2 0 0 0 3.92 2.92A8.43 8.43 0 0 1 2 19.53a11.87 11.87 0 0 0 6.29 1.84c7.55 0 11.68-6.26 11.68-11.68 0-.18-.01-.36-.02-.53A8.34 8.34 0 0 0 22.46 6z" />
                    </svg>
                </a>
                <a href="#" class="hover:text-white transition" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M12 2.2c3.2 0 3.584.012 4.85.07 1.17.056 1.97.24 2.43.41a4.92 4.92 0 0 1 1.78 1.03 4.92 4.92 0 0 1 1.03 1.78c.17.46.354 1.26.41 2.43.058 1.267.07 1.65.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.24 1.97-.41 2.43a4.92 4.92 0 0 1-1.03 1.78 4.92 4.92 0 0 1-1.78 1.03c-.46.17-1.26.354-2.43.41-1.267.058-1.65.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.97-.24-2.43-.41a4.92 4.92 0 0 1-1.78-1.03 4.92 4.92 0 0 1-1.03-1.78c-.17-.46-.354-1.26-.41-2.43C2.212 15.584 2.2 15.2 2.2 12s.012-3.584.07-4.85c.056-1.17.24-1.97.41-2.43a4.92 4.92 0 0 1 1.03-1.78 4.92 4.92 0 0 1 1.78-1.03c.46-.17 1.26-.354 2.43-.41C8.416 2.212 8.8 2.2 12 2.2zm0-2.2C8.735 0 8.332.013 7.052.072 5.77.13 4.722.33 3.9.634a7.14 7.14 0 0 0-2.6 1.58 7.14 7.14 0 0 0-1.58 2.6C-.33 5.278-.13 6.326-.072 7.608.013 8.888 0 9.292 0 12s.013 3.112.072 4.392c.058 1.282.258 2.33.562 3.152a7.14 7.14 0 0 0 1.58 2.6 7.14 7.14 0 0 0 2.6 1.58c.822.304 1.87.504 3.152.562C8.888 23.987 9.292 24 12 24s3.112-.013 4.392-.072c1.282-.058 2.33-.258 3.152-.562a7.14 7.14 0 0 0 2.6-1.58 7.14 7.14 0 0 0 1.58-2.6c.304-.822.504-1.87.562-3.152C23.987 15.112 24 14.708 24 12s-.013-3.112-.072-4.392c-.058-1.282-.258-2.33-.562-3.152a7.14 7.14 0 0 0-1.58-2.6 7.14 7.14 0 0 0-2.6-1.58c-.822-.304-1.87-.504-3.152-.562C15.112.013 14.708 0 12 0z" />
                        <path d="M12 5.838A6.162 6.162 0 1 0 18.162 12 6.162 6.162 0 0 0 12 5.838zm0 10.162A3.999 3.999 0 1 1 16 12 3.999 3.999 0 0 1 12 16zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="bg-[#002f7a] text-white text-sm text-center py-4">
        &copy; <?= date("Y") ?> Booklify. All rights reserved.
    </div>
</footer>