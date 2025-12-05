<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
?>

<!-- preloader -->
<div class="loader-wrap">
    <div class="preloader">
        <div class="preloader-close">x</div>
        <div id="handle-preloader" class="handle-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="i" class="letters-loading">
                        i
                    </span>
                    <span data-text-preloader="g" class="letters-loading">
                        g
                    </span>
                    <span data-text-preloader="i" class="letters-loading">
                        i
                    </span>
                    <span data-text-preloader="t" class="letters-loading">
                        t
                    </span>
                    <span data-text-preloader="a" class="letters-loading">
                        a
                    </span>
                    <span data-text-preloader="l" class="letters-loading">
                        l
                    </span>
                    <span data-text-preloader="B" class="letters-loading">
                        B
                    </span>
                    <span data-text-preloader="o" class="letters-loading">
                        o
                    </span>
                    <span data-text-preloader="t" class="letters-loading">
                        t
                    </span>
                    <span data-text-preloader="s" class="letters-loading">
                        s
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->


<!-- main header -->
<header class="main-header header-style-one">
    <!-- header-lower -->
    <div class="header-lower header_section_2">
        <div class="outer-container">
            <div class="outer-box">
                <div class="left-column">
                    <div class="logo-box">
                        <figure class="logo header_logo"><a href="index"><img height="70px" src="assets/images/logo3.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="<?php echo ($curPageName == 'index.php') ? 'current' : ''; ?>"><a href="index">Home</a></li>
                                    <li class="<?php echo ($curPageName == 'about.php') ? 'current' : ''; ?>"><a href="about">About</a></li>
                                    <li class="<?php echo ($curPageName == 'pricing.php') ? 'current' : ''; ?>"><a href="pricing">Pricing</a></li>
                                    <li class="<?php echo ($curPageName == 'features.php') ? 'current' : ''; ?>"><a href="features">Features</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="menu-right-content">

                    <div class="btn-box">

                        <a class="theme-btn btn-one" href="contact">Contact Us</a>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-container">
            <div class="outer-box">
                <div class="left-column">
                    <div class="logo-box">
                        <figure class="logo header_logo"><a href="index"><img height="70px" src="assets/images/logo3.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area clearfix">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
                <div class="menu-right-content">

                    <div class="btn-box">


                        <a class="theme-btn btn-one" href="contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->


<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index"><img height="70px" src="assets/images/logo3.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li><?=ADDRESS?></li>
                <li><a href="tel:<?=PHONE?>"><?=PHONE?></a></li>
                <li><a href="mailto:<?=SUPPORT_EMAIL?>"><?=SUPPORT_EMAIL?></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->