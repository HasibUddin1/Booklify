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
        "title" => "Contact",
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
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-info-section -->
        <section class="contact-info-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>Get In Touch <br />With Us For More Infromation</h2>
                    <p>54 Berrick 2nd Street Boston, Massachusetts <br />02115,United States.</p>
                    <h6><a href="https://www.google.com/maps" target="_blank"><i class="flaticon-right-arrow"></i>View On Map</a></h6>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-79.png" alt=""></div>
                                <h4>Call Us</h4>
                                <p>Call us today & Experience exceptional service.</p>
                                <a href="tel:0448881234567"><?=PHONE?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-80.png" alt=""></div>
                                <h4>Email</h4>
                                <p>Have questions or project send your details.</p>
                                <a href="mailto:<?=SUPPORT_EMAIL?>"><?=SUPPORT_EMAIL?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section -->


        <!-- contact-section -->
        <?php include_once "includes/contactForm.php"; ?>
        <!-- contact-section end -->

        

        <?php include_once "includes/footer.php"; ?>
    </div>

    <?php include_once "includes/scripts.php"; ?>


    <!-- To Remove Query Paramter on Page refresh -->
    <script>
        function removeQueryParams() {
            var newUrl = window.location.pathname;
            history.replaceState({}, '', newUrl);
        }
        window.onload = removeQueryParams;
    </script>
</body>

</html>