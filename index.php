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
        "title" => "Home",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>

<body>


    <?php include_once "includes/nav.php"; ?>

    <!-- Banner Section -->
    <?php include_once "includes/banner.php"; ?>

    <!-- Search Result -->
    <?php include_once "includes/search_result.php"; ?>

    <!-- Features Section -->
    <?php include_once "includes/features.php"; ?>

    <!-- Offers Section -->
    <?php include_once "includes/offers.php"; ?>

    <!-- Trending Destinations Section -->
    <?php include_once "includes/trending_destinations.php"; ?>

    





    <?php include_once "includes/footer.php"; ?>



    <?php include_once "includes/scripts.php"; ?>

</body>

</html>