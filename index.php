<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$searchResults = []; // default empty

// If form submitted → include search logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "core/search_results_box.php";
    // now $searchResults is populated
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php $pageInfo = ["title" => "Home"]; ?>
    <?php include_once "includes/head.php"; ?>
</head>

<body>

    <?php include_once "includes/nav.php"; ?>

    <!-- Banner -->
    <?php include_once "includes/Stays/banner.php"; ?>

    <!-- Search Result -->
    <?php include_once "includes/Stays/search_result.php"; ?>

    <!-- Other Sections -->
    <?php include_once "includes/Stays/features.php"; ?>
    <?php include_once "includes/Stays/offers.php"; ?>
    <?php include_once "includes/Stays/trending_destinations.php"; ?>
    <?php include_once "includes/footer.php"; ?>

    <?php include_once "includes/scripts.php"; ?>

</body>

</html>