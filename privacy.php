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

<body class="bg-gray-100">

    <?php include_once "includes/nav.php"; ?>



    <div class="max-w-5xl mx-auto mt-16 p-6 bg-white rounded-lg shadow-lg">

        <h1 class="text-3xl font-bold mb-6 text-center">Privacy Policy</h1>

        <section class="mb-6">
            <p class="mb-2">
                <strong>Booklify</strong> respects your privacy and is committed to protecting your personal data.
            </p>
            <ul class="list-disc list-inside mb-2">
                <li>We collect personal information such as name, email, and contact details to process bookings.</li>
                <li>Booking history and preferences are stored to enhance user experience.</li>
                <li>Payment information is collected securely for transaction purposes.</li>
                <li>We do not sell or share your personal data with third parties except as required by law or to process bookings.</li>
            </ul>
            <p class="mb-2">
                You can request access, correction, or deletion of your data by contacting us at
                <a href="mailto:support@booklify.com" class="text-blue-600 underline">support@booklify.com</a>.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold mb-2">Cookies</h2>
            <p class="mb-2">
                Booklify may use cookies and similar technologies to improve user experience. You can manage cookie preferences through your browser settings.
            </p>
        </section>

    </div>


    <?php include_once "includes/footer.php"; ?>


    <?php include_once "includes/scripts.php"; ?>

</body>

</html>