<!-- main-footer -->
<footer class="main-footer bg-color-2">
    <div class="widget-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>Stay Connected</h3>
                        </div>
                        <div class="widget-content">

                            <h3>Join Our Community</h3>
                            <p>Stay informed about our latest updates, features, and promotions. Subscribe to our newsletter for insights on enhancing your chatbot experience.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Useful Links</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="index">Home</a></li>
                                <li><a href="about">About</a></li>
                                <li><a href="pricing">Pricing</a></li>
                                <li><a href="contact">Contact</a></li>
                                <li><a href="features">Features</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>About Us</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="#choose">Why Choose Us?</a></li>
                                <li><a href="#pricing">Pricing</a></li>
                                <li><a href="#boost">Boost Business</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Company</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a><?=CORP_NAME?></a></li>
                                <li><a href="tel:<?=PHONE?>"><?=PHONE?></a></li>
                                <li><a href="mailto:<?=SUPPORT_EMAIL?>"><?=SUPPORT_EMAIL?></a></li>
                                <li><a><?=ADDRESS?></a></li>
                                <li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="bottom-inner">
                <div class="copyright">
                    <p>&copy; 2024 <a href="index"><?= SITE_NAME ?></a> All Rights Reserved.</p>
                </div>
                <ul class="footer-nav clearfix">
                    <li><a href="privacy">Privacy Policy</a></li>
                    <li><a href="terms">Terms & Conditions</a></li>
                    <li><a href="refund">Return Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->



<!-- scroll to top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="flaticon-down-arrow"></i>
</button>
<?php
$html = ob_get_clean();
$html = preg_replace('/<!--(.|\s)*?-->/', '', $html); // Remove HTML comments
$html = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $html); // Remove CSS comments
echo $html;
?>