<!-- contact-section -->
<section class="contact-section sec-pad-2">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.jpg);"></div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title light">
                        <h6>[ Drop a Line ]</h6>
                        <h2>Let's Collaborate <br />& Discuss Your Project</h2>
                    </div>
                    <div class="inner-box">
                        <h4>I want to discuss;</h4>
                        <ul class="list-item clearfix">
                            <li>
                                <div class="check-box">
                                    <input class="check" type="checkbox" id="checkbox1" checked="">
                                    <label for="checkbox1">User Experience</label>
                                </div>
                            </li>
                            <li>
                                <div class="check-box">
                                    <input class="check" type="checkbox" id="checkbox2">
                                    <label for="checkbox2">Quality & Reliability</label>
                                </div>
                            </li>
                            <li>
                                <div class="check-box">
                                    <input class="check" type="checkbox" id="checkbox3">
                                    <label for="checkbox3">Collaboration</label>
                                </div>
                            </li>
                            <li>
                                <div class="check-box">
                                    <input class="check" type="checkbox" id="checkbox4">
                                    <label for="checkbox4">Legal and Copyright</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <form action="core/contact.php" method="post" class="default-form">
                        <div class="form-group">
                            <div class="text">
                                <div class="icon"><img src="assets/images/icons/icon-37.png" alt=""></div>
                                <label>Your Name</label>
                            </div>
                            <input type="text" name="name" placeholder="Enter name here" required>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <div class="icon"><img src="assets/images/icons/icon-38.png" alt=""></div>
                                <label>Email Address</label>
                            </div>
                            <input type="email" name="email" placeholder="Email address" required>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <div class="icon"><img src="assets/images/icons/icon-39.png" alt=""></div>
                                <label>Message</label>
                            </div>
                            <textarea name="message" placeholder="Message goes here" required></textarea>
                        </div>
                        <div class="form-group message-btn">
                            <button type="submit" class="theme-btn btn-two">Send Your Mesage</button>
                        </div>

                        <div id="contactResponse">
                            <?php
                            if (isset($_GET['status'])) {
                                if ($_GET['status'] === 'true') {
                                    echo '<p style="color: green;">Your Message has been sent!</p>';
                                } elseif ($_GET['status'] === 'false') {
                                    echo '<p style="color: red;">Message sending failed. Please try again later.</p>';
                                }
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->