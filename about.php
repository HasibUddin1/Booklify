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
        "title" => "About",
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
                    <h1>Introducing <?=SITE_NAME?></h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- exploring-section -->
        <section class="exploring-section about-page">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="col-lg-7 col-md-12 col-sm-12 video-column">
                            <div class="video-inner" style="background-image: url(assets/images/resource/video-1.jpg);">
                               
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h6>[ Empowering AI Conversations ]</h6>
                                    <h2>Transforming Engagement<br />with AI</h2>
                                </div>
                                <div class="text-box">
                                    <div class="bold-text">Effortless AI solutions for smarter communication</div>
                                    <p>Our AI-powered chatbots enhance customer engagement, streamline support, and improve business efficiency. Designed for seamless integration, they offer personalized, 24/7 assistance to meet your growing needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box centred">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <h3>Instant Support</h3>
                                <p>Provide real-time assistance to customers, anytime, anywhere.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <h3>Seamless Integration</h3>
                                <p>Effortlessly connect with existing platforms and systems.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <h3>Smart Automation</h3>
                                <p>Automate tasks to boost productivity and reduce manual effort.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- exploring-section end -->


        <!-- values-section -->
        <section class="values-section sec-pad bg-color-1">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-48.png);"></div>
            <div class="auto-container">
                <div class="title-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title">
                                <h6>[ Enhance Your Experience ]</h6>
                                <h2>Seamless User Interaction</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="title-text">
                                <p>Enhancing Engagement with Every Conversation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-box">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 btn-column">
                            <div class="tab-btns tab-buttons">
                                <div class="tab-btn active-btn" data-tab="#tab-1">01. User-Friendly Interface <a><i class="flaticon-right-arrow"></i></a></div>
                                <div class="tab-btn" data-tab="#tab-2">02. 24/7 Support <a><i class="flaticon-right-arrow"></i></a></div>
                                <div class="tab-btn" data-tab="#tab-3">03. Customizable Solutions <a><i class="flaticon-right-arrow"></i></a></div>
                                <div class="tab-btn" data-tab="#tab-4">04. Real-Time Analytics <a><i class="flaticon-right-arrow"></i></a></div>
                                <div class="tab-btn" data-tab="#tab-5">05. Seamless Integration <a><i class="flaticon-right-arrow"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="content-box">
                                        <h3>User-Friendly Interface</h3>
                                        <p>Enhance user experience with our intuitive design, making navigation effortless for everyone.</p>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="content-box">
                                        <h3>24/7 Support</h3>
                                        <p>Access round-the-clock assistance from our dedicated team, ensuring help is always just a click away.</p>
                                    </div>
                                </div>
                                <div class="tab" id="tab-3">
                                    <div class="content-box">
                                        <h3>Customizable Solutions</h3>
                                        <p>Tailor our chatbot features to fit your business needs, ensuring maximum efficiency and engagement.</p>
                                    </div>
                                </div>
                                <div class="tab" id="tab-4">
                                    <div class="content-box">
                                        <h3>Real-Time Analytics</h3>
                                        <p>Monitor interactions and performance in real-time, providing insights to optimize your chatbot's effectiveness.</p>
                                    </div>
                                </div>
                                <div class="tab" id="tab-5">
                                    <div class="content-box">
                                        <h3>Seamless Integration</h3>
                                        <p>Effortlessly integrate with your existing systems and platforms, streamlining operations for enhanced productivity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- values-section end -->




        <!-- funfact-section -->
        <section class="funfact-section">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-49.png);"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <h3>Advanced AI Technology</h3>
                                <div class="inner-box">
                                    
                                    <p>Leverage cutting-edge algorithms to deliver smarter, more human-like interactions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <h3>Multi-Channel Support</h3>
                                <div class="inner-box">
                                    
                                    <p>Engage users across various platforms, including websites, social media, and messaging apps.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <h3>Secure Data Handling</h3>
                                <div class="inner-box">
                                    
                                    <p>Ensure user privacy with robust security measures that protect sensitive information.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <h3>Scalable Solutions</h3>
                                <div class="inner-box">
                                    <p>Easily adjust your chatbot capabilities to meet growing business demands without disruption.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


        <?php include_once "includes/footer.php"; ?>
    </div>

    <?php include_once "includes/scripts.php"; ?>

</body>

</html>