<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!doctype html>
<html lang="en">

<head>


    <?php
    $pageInfo = [
        "title" => "Airport",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>

<body class="flex flex-col min-h-screen">


    <?php include_once "includes/nav.php"; ?>


    <!-- Banner Section -->
    <section class="banner-section flex-1">
        <div class="bg-[#003a95]">
            <div class="max-w-6xl mx-auto pt-[64px] pb-[78px] px-[5px]">
                <h2 class="text-white font-bold text-5xl">Coming Soon......</h2>
                <p class="text-white text-2xl">Search deals on hotels, homes, and much more...</p>
            </div>
        </div>
    </section>


    <?php include_once "includes/footer.php"; ?>



    <?php include_once "includes/scripts.php"; ?>

</body>

</html>