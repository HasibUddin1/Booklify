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
        "title" => "Terms",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

    <style>
        .terms_content h1, h2{
            margin-top: 20px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .terms_content p{
            font-size: 20px;
        }

        .terms_content ul{
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .terms_content li{
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
                    <h1>Terms & Conditions</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index">Home</a></li>
                        <li>Terms & Conditions</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

        <section class="container my-5 terms_content">
            <h1>Terms of Service</h1>
            

            <p>Welcome to <?=SITE_NAME?>! By accessing our website at <a href="<?=URL?>"><?=URL?></a> and utilizing our services, you agree to comply with and be bound by the following Terms of Service. These terms govern your use of our website, applications, and services. If you do not agree with any part of these terms, please refrain from using our services.</p>

            <h2>Acceptance of Terms</h2>
            <p>By accessing and using <?=SITE_NAME?>, you confirm that you are at least 18 years of age and have the legal capacity to enter into these Terms. If you are using our services on behalf of an organization or company, you represent that you have the authority to bind that entity to these Terms. It is your responsibility to review these Terms regularly, as they may change at any time without prior notice. Your continued use of the services constitutes your acceptance of any modifications made.</p>

            <h2>Services Provided</h2>
            <p><?=SITE_NAME?> specializes in providing advanced AI chatbot solutions designed to meet the unique needs of businesses. Our chatbot services aim to enhance user engagement, streamline communication, and improve operational efficiency. Whether you are looking for a simple chatbot to answer FAQs or a more complex solution that integrates with your customer relationship management (CRM) systems, we strive to offer tailored solutions that reflect your brand and support your business objectives.</p>
            <p>Our services are designed with the user in mind. We understand that businesses have different requirements, which is why we offer a range of customization options. With our chatbots, you can provide your customers with instant responses to their inquiries, support sales processes, and create a more interactive experience on your website or application.</p>

            <h2>Pricing and Payment</h2>
            <p>We offer several pricing plans to accommodate businesses of various sizes and needs. Our pricing plans are as follows:</p>
            <ul>
                <li><strong>Basic Plan</strong>: $59 per month</li>
                <li><strong>Standard Plan</strong>: $147 per month</li>
                <li><strong>Premium Plan</strong>: $149 per month</li>
                <li><strong>Enterprise Plan</strong>: $234 per month</li>
            </ul>
            <p>All prices are listed in USD and may be subject to change. Payment for the chosen plan will be processed through a secure payment gateway at the time of subscription. By providing your payment information, you authorize us to charge your payment method for the subscription fees associated with your selected plan.</p>
            <p>It is important to note that all subscription fees are non-refundable. If you wish to cancel your subscription, you may do so at any time; however, you will not receive a refund for any unused portion of your subscription. You will have access to the services until the end of your current billing period.</p>

            <h2>User Responsibilities</h2>
            <p>As a user of <?=SITE_NAME?>, you are responsible for maintaining the confidentiality of your account information, including your username and password. You agree to restrict access to your computer and account to prevent unauthorized access. You acknowledge that you are fully responsible for all activities that occur under your account. If you suspect any unauthorized use of your account or any other breach of security, you must notify us immediately.</p>
            <p>Users are prohibited from using our services for any illegal or unauthorized purpose. You agree not to engage in any conduct that may harm or interfere with our services, disrupt the servers or networks connected to our services, or violate any applicable laws or regulations. Any violation of these responsibilities may result in the termination of your account and access to our services.</p>

            <h2>Intellectual Property</h2>
            <p>All content, trademarks, and other intellectual property rights in connection with <?=SITE_NAME?>, including but not limited to software, applications, design, text, graphics, and logos, are owned by or licensed to <?=SITE_NAME?>. You may not use, reproduce, modify, or distribute any part of our services without obtaining our prior written consent. Unauthorized use of our intellectual property may result in legal action.</p>
            <p>We encourage users to respect the intellectual property rights of others. If you believe that your work has been copied in a way that constitutes copyright infringement, please contact us with the necessary details, and we will investigate the matter.</p>

            <h2>Limitation of Liability</h2>
            <p>To the fullest extent permitted by law, <?=SITE_NAME?>, its directors, employees, or agents shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or related to your use of our services. This includes, but is not limited to, damages for loss of profits, goodwill, data, or other intangible losses, even if we have been advised of the possibility of such damages.</p>
            <p>Our liability for any claim arising out of or relating to these Terms or your use of our services shall be limited to the maximum extent permitted by law. We will not be liable for any damages resulting from your reliance on any information obtained through our services or any unauthorized access to or use of our servers.</p>

            <h2>Indemnification</h2>
            <p>You agree to indemnify and hold harmless <?=SITE_NAME?>, its affiliates, and their respective directors, employees, and agents from and against any claims, losses, damages, liabilities, costs, and expenses, including reasonable legal fees, arising out of or relating to your use of our services, your violation of these Terms, or your infringement of any intellectual property rights or other rights of any person or entity.</p>
            <p>This obligation to indemnify includes any claims brought against us by third parties based on your actions, including claims that arise out of your use of our services or any information you provide through our platform.</p>

            <h2>Changes to Terms</h2>
            <p><?=SITE_NAME?> reserves the right to modify these Terms at any time. If we decide to change our Terms, we will post the new Terms on our website with an updated effective date. It is your responsibility to review these Terms periodically for changes. Your continued use of our services after any changes to these Terms will constitute your acceptance of the modified Terms.</p>
            <p>If we make significant changes, we may also notify you via email or through a notice on our website. We encourage you to read any changes carefully to understand how they may affect your rights and responsibilities.</p>

            <h2>Governing Law</h2>
            <p>These Terms shall be governed by and construed in accordance with the laws of the State of Delaware, USA, without regard to its conflict of law principles. Any disputes arising out of or relating to these Terms shall be resolved in the state or federal courts located in Delaware. By using our services, you consent to the jurisdiction of these courts.</p>

            <h2>Contact Us</h2>
            <p>If you have any questions about these Terms or our services, please feel free to reach out to us. We are here to assist you and ensure that your experience with <?=SITE_NAME?> is positive.</p>

            <p><strong><?=SITE_NAME?></strong><br>
                Email: <a href="mailto:<?=SUPPORT_EMAIL?>"><?=SUPPORT_EMAIL?></a><br>
                Phone: <?=PHONE?><br>
                Address: <?=ADDRESS?></p>

            <p>Thank you for choosing <?=SITE_NAME?>. We look forward to serving your AI chatbot needs and helping your business grow!</p>
        </section>


        <?php include_once "includes/footer.php"; ?>
    </div>

    <?php include_once "includes/scripts.php"; ?>

</body>

</html>