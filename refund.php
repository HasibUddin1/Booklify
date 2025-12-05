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
        "title" => "Return Policy",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>


    <style>
        .terms_content h1,
        h2 {
            margin-top: 20px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .terms_content p {
            font-size: 20px;
        }

        .terms_content ul {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .terms_content li {
            list-style-type: disc !important;
            list-style-position: inside;
        }
    </style>

</head>

<body>

    <div class="boxed_wrapper">
        <?php include_once "includes/nav.php"; ?>

        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Return Policy</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index">Home</a></li>
                        <li>Return Policy</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

        <section class="container my-5 terms_content">
            <h1>Return Policy</h1>

            <p>At <?=SITE_NAME?>, we strive to provide the best service possible. However, if you are not satisfied with your purchase, we offer a return policy to ensure your peace of mind.</p>

            <h2>Eligibility for Returns</h2>
            <p>You may be eligible for a refund or exchange if:</p>
            <ul>
                <li>The product is within 30 days of purchase.</li>
                <li>The product is unused and in the same condition that you received it.</li>
                <li>The product is in its original packaging.</li>
            </ul>

            <h2>How to Initiate a Return</h2>
            <p>To initiate a return, please follow these steps:</p>
            <ul>
                <li>Contact our support team at <a href="<?=SUPPORT_EMAIL?>"><?=SUPPORT_EMAIL?></a> to request a return.</li>
                <li>Provide your order number and details about the product you wish to return.</li>
                <li>Our team will respond with instructions on how to return your item.</li>
            </ul>

            <h2>Refund Process</h2>
            <p>Once we receive your returned product, we will inspect it and notify you of the status of your refund. If approved, we will process your refund to your original payment method. Please note that:</p>
            <ul>
                <li>It may take 5-10 business days for the refund to reflect in your account.</li>
                <li>You will be responsible for paying your own shipping costs for returning your item, unless otherwise specified.</li>
            </ul>

            <h2>Exchanges</h2>
            <p>If you need to exchange your product for the same item, please contact us at <a href="mailto:<?=SUPPORT_EMAIL?>"><?=SUPPORT_EMAIL?></a>. We will guide you through the process to ensure a smooth exchange.</p>

            <h2>Exceptions</h2>
            <p>Some items may not be eligible for return due to health and safety regulations or other legal restrictions. These include:</p>
            <ul>
                <li>Digital products or services that have been accessed or used.</li>
                <li>Any items marked as final sale or non-returnable at the time of purchase.</li>
            </ul>

            <h2>Contact Us</h2>
            <p>If you have any questions about our return policy, please reach out to our customer support team:</p>

            <p><strong><?=SITE_NAME?></strong><br>
                Email: <a href="mailto:<?=SUPPORT_EMAIL?>"><?=SUPPORT_EMAIL?></a><br>
                Phone: <?=PHONE?><br>
                Address: <?=ADDRESS?></p>

            <p>Thank you for choosing <?=SITE_NAME?>. We appreciate your business and are here to assist you with any questions or concerns regarding our products and services.</p>
        </section>


        <?php include_once "includes/footer.php"; ?>
    </div>

    <?php include_once "includes/scripts.php"; ?>

</body>

</html>