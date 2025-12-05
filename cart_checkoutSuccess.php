<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'core/cart_functions.php';

$cartItems = getCartItems();
emptyCart();
?>

<!doctype html>
<html lang="en">

<head>


    <?php
    $pageInfo = [
        "title" => "Order Success",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>

<body>

    <div class="boxed_wrapper">
        <?php include_once "includes/nav.php"; ?>

        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Payment is Confirmed!</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index">Home</a></li>
                        <li>Payment Confirmation</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

        <h1 class="text-center mt-5">Order Success </h1>

        <!-- Checkout Area -->
        <section class="checkout_page">

            <?php if (empty($cartItems)) : ?>
                <script>
                    window.location.href = "cart.php";
                </script>
            <?php else : ?>
                <div class="checkout_container">
                    <div>
                        <h1><strong style="color: green">Congratulations!</strong> Your Order Has Been Succesfully Placed.</h1>
                        <legend>Order Item</legend>
                        <div class="card">
                            <address>
                                <div class="d-flex justify-content-around">
                                    <div class="flex-1 item_name">
                                        <?= $cartItems['name'] ?>
                                    </div>
                                    <div class="flex-1 text-end item_price">
                                        $<?= $cartItems['price'] ?> <span>/ <?= $cartItems['billing'] ?></span>
                                    </div>
                                </div>
                            </address>
                        </div>
                    </div>

                    <div>
                        <a href="index" class="btn btn-primary mt-5 w-100 cart_btn">
                            Return To <strong>HomePage</strong>
                        </a>
                    </div>
                </div>

            <?php endif; ?>
        </section>
        <!-- Checkout Area -->


        <?php include_once "includes/footer.php"; ?>
    </div>
    <?php include_once "includes/scripts.php"; ?>


</body>

</html>