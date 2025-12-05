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

    





    <?php include_once "includes/footer.php"; ?>



    <?php include_once "includes/scripts.php"; ?>

</body>

</html>