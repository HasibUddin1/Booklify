<?php
include_once "../core/login_check.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    $pageInfo = [
        "title" => "Dashboard",
    ];
    ?>
    <?php include "includes/head.php"; ?>
</head>

<body>


    <?php include "includes/header.php"; ?>


    <?php include "includes/user_bookings.php"; ?>


    <?php include "includes/footer.php"; ?>


    <?php include "includes/scripts.php"; ?>


    <!-- Cancel Booking Modal -->
    <div id="cancelModal"
        class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="bg-white/20 dark:bg-gray-800/40 backdrop-blur-xl border border-white/30 dark:border-gray-700/40 
        w-full max-w-md rounded-3xl shadow-2xl p-8 scale-90 transition-transform duration-200">

            <!-- Icon -->
            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-red-100 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-10 w-10 text-red-600"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>

            <!-- Title -->
            <h2 class="text-2xl font-bold text-center text-white mb-2">
                Cancel Booking
            </h2>

            <!-- Message -->
            <p id="cancelModalMessage" class="text-center text-white mb-6">
                Are you sure you want to cancel this booking?
            </p>

            <!-- Buttons -->
            <div class="flex justify-center gap-4">
                <button id="cancelModalClose"
                    class="px-5 py-2.5 rounded-xl bg-gray-300 text-gray-800 hover:bg-gray-400 transition cursor-pointer">
                    Cancel
                </button>
                <button id="confirmCancelBooking"
                    class="px-5 py-2.5 rounded-xl bg-red-600 text-white hover:bg-red-700 transition cursor-pointer">
                    Yes, Cancel
                </button>
            </div>
        </div>
    </div>





</body>

</html>