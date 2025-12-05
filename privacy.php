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
        "title" => "Privacy",
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
                    <h1>Privacy Policy</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index">Home</a></li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

        <section class="container my-5 terms_content">
            <h1>Privacy Policy</h1>

            <p>This Privacy Policy outlines how <?=SITE_NAME?> (“we,” “our,” or “us”) collects, uses, and protects the personal information of our users (“you” or “your”) when you visit our website <a href="<?=URL?>"><?=URL?></a> and utilize our services. We are committed to safeguarding your privacy and ensuring that your personal information is handled responsibly.</p>

            <h2>Information We Collect</h2>
            <p>We may collect various types of information from you when you use our services, including:</p>
            <ul>
                <li><strong>Personal Information</strong>: This includes information that can identify you, such as your name, email address, phone number, and billing information when you register for an account or purchase our services.</li>
                <li><strong>Usage Data</strong>: We may collect information about how you access and use our website, including your IP address, browser type, pages visited, and time spent on our site.</li>
                <li><strong>Cookies and Tracking Technologies</strong>: Our website may use cookies and similar tracking technologies to enhance your experience. You can manage your cookie preferences through your browser settings.</li>
            </ul>

            <h2>How We Use Your Information</h2>
            <p><?=SITE_NAME?> uses the information we collect for various purposes, including:</p>
            <ul>
                <li><strong>Providing Services</strong>: We use your personal information to create and manage your account, process payments, and provide customer support.</li>
                <li><strong>Improving Our Services</strong>: Your feedback helps us improve our offerings and enhance the overall user experience.</li>
                <li><strong>Marketing Communications</strong>: With your consent, we may send you promotional materials and updates about our services. You can opt out of these communications at any time.</li>
                <li><strong>Legal Compliance</strong>: We may use your information to comply with applicable laws, regulations, or legal requests.</li>
            </ul>

            <h2>Data Retention</h2>
            <p>We retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, or as required by law. When your information is no longer needed, we will securely delete or anonymize it.</p>

            <h2>Sharing Your Information</h2>
            <p><?=SITE_NAME?> does not sell or rent your personal information to third parties. We may share your information in the following circumstances:</p>
            <ul>
                <li><strong>Service Providers</strong>: We may employ third-party companies and individuals to facilitate our services, such as payment processors, hosting providers, or customer service support. These parties will have access to your personal information only to perform these tasks on our behalf and are obligated to protect it.</li>
                <li><strong>Legal Requirements</strong>: We may disclose your personal information if required to do so by law or in response to valid requests by public authorities (e.g., a court or a government agency).</li>
                <li><strong>Business Transfers</strong>: If we are involved in a merger, acquisition, or asset sale, your personal information may be transferred as part of that transaction.</li>
            </ul>

            <h2>Security of Your Information</h2>
            <p>We take the security of your personal information seriously and implement appropriate technical and organizational measures to protect it from unauthorized access, disclosure, alteration, and destruction. However, please note that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your information, we cannot guarantee its absolute security.</p>

            <h2>Your Rights</h2>
            <p>You have certain rights regarding your personal information, including:</p>
            <ul>
                <li><strong>Access</strong>: You have the right to request a copy of the personal information we hold about you.</li>
                <li><strong>Correction</strong>: You can request that we correct any inaccuracies in your personal information.</li>
                <li><strong>Deletion</strong>: You have the right to request the deletion of your personal information, subject to certain exceptions.</li>
                <li><strong>Opt-Out</strong>: You may opt out of receiving marketing communications from us at any time by following the unsubscribe instructions provided in those communications.</li>
            </ul>

            <h2>Third-Party Links</h2>
            <p>Our website may contain links to third-party websites that are not operated by us. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites. We encourage you to review the privacy policies of any third-party sites you visit.</p>

            <h2>Children’s Privacy</h2>
            <p>Our services are not intended for individuals under the age of 13. We do not knowingly collect personal information from children. If we become aware that we have collected personal information from a child under 13, we will take steps to delete that information promptly. If you are a parent or guardian and believe your child has provided us with personal information, please contact us.</p>

            <h2>Changes to This Privacy Policy</h2>
            <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page with an updated effective date. We encourage you to review this Privacy Policy periodically for any changes. Your continued use of our services after any modifications to the Privacy Policy will constitute your acknowledgment of the changes and your consent to abide by and be bound by the modified policy.</p>

            <h2>Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please feel free to contact us:</p>

            <p><strong><?=SITE_NAME?></strong><br>
                Email: <a href="mailto:<?=SUPPORT_EMAIL?>"><?=SUPPORT_EMAIL?></a><br>
                Phone: <?=PHONE?><br>
                Address: <?=ADDRESS?></p>

            <p>Thank you for trusting <?=SITE_NAME?> with your personal information. We are committed to protecting your privacy and providing you with a safe and secure experience.</p>
        </section>


        <?php include_once "includes/footer.php"; ?>
    </div>

    <?php include_once "includes/scripts.php"; ?>

</body>

</html>