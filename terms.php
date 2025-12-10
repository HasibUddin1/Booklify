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

<body class="bg-gray-100">


    <?php include_once "includes/nav.php"; ?>

    <div class="max-w-5xl mx-auto mt-16 p-6 bg-white rounded-lg shadow-lg">

        <h1 class="text-3xl font-bold mb-6 text-center">Terms & Conditions</h1>

        <section class="mb-6">
            <p class="mb-4">
                Welcome to <strong>Booklify</strong>. By accessing or using our website, you agree to comply with and be bound by the following terms and conditions. Please read these terms carefully before making any bookings or using our services.
            </p>

            <h2 class="text-2xl font-semibold mb-2">1. Eligibility</h2>
            <p class="mb-2">
                You must be at least 18 years old to create an account or make bookings on Booklify. By using this website, you represent that you meet this requirement and have the legal capacity to enter into these terms.
            </p>

            <h2 class="text-2xl font-semibold mb-2">2. Account Responsibility</h2>
            <p class="mb-2">
                Users are responsible for maintaining the confidentiality of their account login credentials. Any activity under your account is your responsibility. You must immediately notify Booklify of any unauthorized use or security breach.
            </p>

            <h2 class="text-2xl font-semibold mb-2">3. Booking Process</h2>
            <ul class="list-disc list-inside mb-2">
                <li>All bookings are subject to availability and confirmation.</li>
                <li>Prices, promotions, and availability may change without prior notice.</li>
                <li>Users must provide accurate and complete information when making a booking.</li>
                <li>Bookings are personal and non-transferable unless specified otherwise by the service provider.</li>
            </ul>

            <h2 class="text-2xl font-semibold mb-2">4. Payment Terms</h2>
            <p class="mb-2">
                Payments must be made in full at the time of booking unless otherwise stated. Booklify accepts secure payment methods and ensures payment information is handled safely. Failure to provide payment may result in cancellation of the booking.
            </p>

            <h2 class="text-2xl font-semibold mb-2">5. Cancellation & Refunds</h2>
            <p class="mb-2">
                Cancellation policies vary by hotel or service provider. Users are responsible for reviewing the cancellation terms before confirming a booking. Refunds will be processed according to the policies of the respective service provider. Booklify is not liable for any losses or charges due to cancellations or changes.
            </p>

            <h2 class="text-2xl font-semibold mb-2">6. Prohibited Activities</h2>
            <ul class="list-disc list-inside mb-2">
                <li>Using the platform for fraudulent or illegal activities.</li>
                <li>Misrepresenting personal information or booking details.</li>
                <li>Interfering with the website's functionality or security.</li>
                <li>Attempting to bypass any restrictions or access control measures.</li>
            </ul>

            <h2 class="text-2xl font-semibold mb-2">7. Limitation of Liability</h2>
            <p class="mb-2">
                Booklify is a platform connecting users with hotels and service providers. We are not responsible for the acts, omissions, or failures of these third-party providers. We disclaim all liability for indirect, incidental, or consequential damages resulting from the use of our services.
            </p>

            <h2 class="text-2xl font-semibold mb-2">8. Modifications to Terms</h2>
            <p class="mb-2">
                Booklify reserves the right to modify these Terms & Conditions at any time. Updated terms will be posted on this page with the effective date. Continued use of the platform constitutes acceptance of the revised terms.
            </p>

            <h2 class="text-2xl font-semibold mb-2">9. Governing Law</h2>
            <p class="mb-2">
                These terms are governed by and construed in accordance with the laws of Bangladesh. Any disputes arising from these terms shall be subject to the exclusive jurisdiction of the courts of Bangladesh.
            </p>

            <h2 class="text-2xl font-semibold mb-2">10. Contact Information</h2>
            <p class="mb-2">
                For questions, concerns, or clarifications regarding these terms, you may contact us at
                <a href="mailto:<?= SUPPORT_EMAIL ?>" class="text-blue-600 underline"><?= SUPPORT_EMAIL ?></a>.
            </p>

        </section>

    </div>


    <?php include_once "includes/footer.php"; ?>


    <?php include_once "includes/scripts.php"; ?>

</body>

</html>