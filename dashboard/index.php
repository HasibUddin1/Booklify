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
    <div id="cancelModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden transition-opacity duration-300">
        <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-2xl p-8 w-full max-w-md transform scale-90 transition-transform duration-300">
            <h2 class="text-2xl font-bold text-center text-gray-900 dark:text-gray-100 mb-4">Cancel Booking</h2>
            <p class="text-center text-gray-700 dark:text-gray-300 mb-6">
                Are you sure you want to cancel this booking?
            </p>

            <div class="flex justify-center gap-4">
                <button id="cancelModalClose" class="px-5 py-2.5 rounded-xl bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-gray-100 hover:bg-gray-300 dark:hover:bg-gray-600 transition cursor-pointer">
                    Close
                </button>
                <button id="confirmCancelBooking" class="px-5 py-2.5 rounded-xl bg-red-600 text-white hover:bg-red-700 transition cursor-pointer">
                    Yes, Cancel
                </button>
            </div>
        </div>
    </div>



</body>

</html>