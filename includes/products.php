<!-- pricing-style-two -->
<section class="pricing-style-two pricing-page pricing_page2 sec-pad" id="pricing">
    <div class="auto-container">
        <div class="sec-title centred">
            <h6>Pricing & Plan</h6>
            <h2>Affordable Pricing Plans</h2>
           
        </div>
        <div class="tabs-box">
            <div class="tabs-content">
                <div class="tab active-tab" id="tab-2">
                    <div class="row clearfix">

                        <?php
                        foreach ($products as $ind => $product) {
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block mt-5">
                                <div class="pricing-table-two <?php echo $product["primary"] ? 'active-block' : '' ?>">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="<?php echo $product["primary"] ? 'assets/images/icons/icon-34.png' : 'assets/images/icons/icon-33.png' ?>" alt=""></div>
                                        <h3><?php echo  $product["product_name"] ?></h3>

                                        <div class="price-box clearfix">
                                            <h4><?php echo  $product["product_price"] ?> <span>/ <?php echo  $product["product_billing"] ?></span></h4>

                                            <form action="core/cart_functions.php" method="post">
                                                <input type="hidden" name="action" value="add">
                                                <input type="hidden" name="id" value="<?= $ind ?>">
                                                <input type="hidden" name="name" value="<?= $product["product_name"] ?>">
                                                <input type="hidden" name="price" value="<?= $product["product_price"] ?>">
                                                <input type="hidden" name="billing" value="<?= $product["product_billing"] ?>">
                                                <button type="submit">Buy Now</button>
                                            </form>
                                        </div>
                                        <!-- <ul class="feature-list clearfix">

                                            <?php
                                            foreach ($product['product_features'] as $featureInd => $feature) {
                                            ?>

                                                <li><?=$feature?></li>

                                            <?php
                                            }
                                            ?>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing-style-two end -->