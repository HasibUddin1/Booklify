<?php include_once "config/config.php" ?>

<?php ob_start(); ?>

<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
<title><?= isset($pageInfo['title']) ? $pageInfo['title'] . " - " . SITE_NAME : SITE_NAME ?></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


<!-- Custom CSS -->

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">


<!-- Stylesheets -->
<link href="assets/css/style.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>