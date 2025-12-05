<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'core/cart_functions.php';

$cartItems = getCartItems();
?>

<!doctype html>
<html lang="en">

<head>


    <?php
    $pageInfo = [
        "title" => "Cart",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>

<body class="cart_page">

    <?php include_once "includes/nav2.php"; ?>




    <section class="cart_container mb-5">
        <?php if (empty($cartItems)) : ?>
            <div class="container cart_content_container">
                <h1 class="fw-bold">Cart Details</h1>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col">
                                        <p class="mb-2 text-center">Your cart is empty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="pricing" class="btn btn-primary w-100 cart_btn">Product Page</a>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="container overflow-hidden">
                <h1 class="fw-bold text-center cart_page_heading">Cart Details</h1>
                <div class="row justify-content-between px-3">
                    <div class="cart_content_container col-xl-6">
                        <h1 class="fw-bold">Product Details</h1>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div>
                                <div class="card table_heading_border">
                                    <div class="card-body p-4">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-6 col-lg-6 col-xl-6">
                                                <p class="m-0 text-start fw-bold">Name</p>
                                            </div>
                                            <div class="col-md-5 col-lg-5 col-xl-5">
                                                <p class="text-end fw-bold">Action</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="card table_content_border2 mb-4">
                                    <div class="card-body p-4">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-3 col-lg-3 col-xl-6">
                                                <p class="m-0 text-start"><span class="alert alert-primary"><?= $cartItems['name'] ?></span></p>
                                            </div>
                                            <div class="col-md-5 col-lg-5 col-xl-5 text-center">
                                                <form class="text-center" action="core/cart_functions.php" method="post">
                                                    <input type="hidden" name="action" value="remove">
                                                    <button type="submit" class="clear_btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="cart_content_container cart_price_info_container col-xl-4">
                        <h1 class="fw-bold">Total Price</h1>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="card table_price_border">
                                    <div class="card-body p-4">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-3 col-lg-3 col-xl-6">
                                                <p class="m-0 text-black"><span>Subtotal</span></p>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-6 text-end">
                                                <p class="m-0 text-black">$<?= $cartItems['price'] ?> <span>/ <?= $cartItems['billing'] ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div>
                                    <div class="card table_content_border mb-4">
                                        <div class="card-body p-4">
                                            <div class="row d-flex justify-content-between align-items-center">
                                                <div class="col-md-3 col-lg-3 col-xl-6">
                                                    <p class="m-0 text-black"><span>Total</span></p>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-6 text-end">
                                                    <p class="m-0 text-black">$<?= $cartItems['price'] ?> <span>/ <?= $cartItems['billing'] ?></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="cart_checkout.php" class="btn btn-primary text-center w-100 cart_btn">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endif; ?>
    </section>


    <?php include_once "includes/footer.php"; ?>
    <?php include_once "includes/scripts.php"; ?>

</body>

</html>