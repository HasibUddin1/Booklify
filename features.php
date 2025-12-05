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
        "title" => "Features",
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
                    <h1>Features</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index">Home</a></li>
                        <li>Features</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- chooseus-section -->
        <section class="chooseus-section sec-pad" id="choose">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>[ Why Choose Us ]</h6>
                    <h2>Reasons to Choosing Us</h2>
                    <p>Empowering Your Success with Innovative Solutions</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 left-column">
                        <div class="left-content">
                            <div class="single-item">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt=""></div>
                                <div class="text-box">
                                    <h3>Speedy Delivery</h3>
                                    <p>Experience rapid implementation of our solutions for immediate results.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                                <div class="text-box">
                                    <h3>Quick Support</h3>
                                    <p>Receive prompt assistance from our team, ensuring your needs are met.</p>
                                </div>
                                <div class="icon-box"><img src="assets/images/icons/icon-11.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/chooseus-1.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 right-column">
                        <div class="right-content text-right">
                            <div class="single-item">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                                <div class="icon-box"><img src="assets/images/icons/icon-12.png" alt=""></div>
                                <div class="text-box">
                                    <h3>Fast Innovation</h3>
                                    <p>Benefit from swift updates and enhancements to stay ahead in technology.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                <div class="text-box">
                                    <h3>Innovative Solutions</h3>
                                    <p>Stay ahead with cutting-edge technology tailored to meet your unique needs.</p>
                                </div>
                                <div class="icon-box"><img src="assets/images/icons/icon-13.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- working-style-two -->
        <section class="working-style-two sec-pad">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.jpg);"></div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>[ Seamless AI Integration ]</h6>
                    <h2>Innovative Solutions at Your Fingertips</h2>
                    <p>Effortlessly connect AI solutions for enhanced business automation.</p>
                </div>
                <div class="inner-container">
                    <div class="inner-box">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-30.png);"></div>
                                    <figure class="image"><img src="assets/images/resource/dashboard-6.jpg" alt=""></figure>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content-box">
                                    <span class="count-text">01</span>
                                    <div class="icon-box"><img src="assets/images/icons/icon-24.png" alt=""></div>
                                    <h3>Smart Automation</h3>
                                    <p>Revolutionize your business workflows with advanced AI-powered automation that handles repetitive tasks efficiently.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>Time-saving processes</li>
                                        <li>Enhanced operational efficiency</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-31.png);"></div>
                                    <figure class="image"><img src="assets/images/resource/dashboard-7.jpg" alt=""></figure>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content-box">
                                    <span class="count-text">02</span>
                                    <div class="icon-box"><img src="assets/images/icons/icon-25.png" alt=""></div>
                                    <h3>Seamless Integration</h3>
                                    <p>Effortlessly integrate our chatbot solutions with your existing business tools for a unified experience.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>Hassle-free setup across platforms</li>
                                        <li>Smooth transitions without disruptions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-32.png);"></div>
                                    <figure class="image"><img src="assets/images/resource/dashboard-8.jpg" alt=""></figure>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content-box">
                                    <span class="count-text">03</span>
                                    <div class="icon-box"><img src="assets/images/icons/icon-26.png" alt=""></div>
                                    <h3>Real-Time Assistance</h3>
                                    <p>Deliver instant, real-time support through AI chatbots that engage with customers around the clock.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>24/7 customer service availability</li>
                                        <li>Quick and accurate responses</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- working-style-two end -->


        <?php include_once "includes/footer.php"; ?>
    </div>

    <?php include_once "includes/scripts.php"; ?>

</body>

</html>