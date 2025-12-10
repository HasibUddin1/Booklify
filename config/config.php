<?php
// check if session started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

define("USE_STRIPE", false); // true = stripe checkout(Need API Keys Below) ; false = normal checkout without stripe

define('STRIPE_API_KEY', 'sdjashjkdhkashdkjashjda');
define('STRIPE_PUBLISHABLE_KEY', 'alsdjklashasjkdhkj');


define("DB_HOST", "localhost");
define("DB_NAME", "booklify");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");


define("SITE_NAME", "Booklify");
define("URL", "booklify.io");
define("CORP_NAME", "");
define("PHONE", "123456789");
define("SUPPORT_EMAIL", "contactus@booklify.com");
define("ADDRESS", "8 The Green, Suite A, Dover, Delaware 19901, USA");


// Contact Form Controls
define("SMTP", false); // set to true for SMTP or false for default php mail
// If SMTP is enabled use the settings below
define("SMTP_HOST", "Host_Name_Of_SMTP_Server");        // Write SMTP host name in String
define("SMTP_PORT", 465);                               // Write SMTP Port as Number not as String
define("SMTP_SECURITY", "ssl");                         // Write SMTP Security like ssl or tls
define("SMTP_USERNAME", "Username_For_SMTP_Account");   // Write SMTP Username in String
define("SMTP_PASSWORD", "Password_For_SMTP_Account");   // Write SMTP Password in String
define("SMTP_TO_EMAIL", "Admin_Recieving_Email");       // Email Address where you will receive all messages



$products = [
    [
        "product_name" => "Basic Plan",
        "product_price" => "59",
        "product_billing" => "Mo",
        "product_description" => "Enjoy the most basic plan",
        "product_features" => array(
            "Basic Chatbot",
            "Email Support",
            "Monthly Updates",
            "User-Friendly",
            "Platform Integration"
        ),
        "primary" => false
    ],
    [
        "product_name" => "Standard Plan",
        "product_price" => "147",
        "product_billing" => "Mo",
        "product_description" => "Enjoy our advanced features",
        "product_features" => array(
            "Advanced Chatbot",
            "Priority Support",
            "Bi-Weekly Updates",
            "Analytics Dashboard",
            "Multi-Platform"
        ),
        "primary" => true
    ],
    [
        "product_name" => "Pro Plan",
        "product_price" => "149",
        "product_billing" => "Mo",
        "product_description" => "Enjoy the most professional plan",
        "product_features" => array(
            "Custom Design",
            "Third-Party Integration",
            "Dedicated Manager",
            "Multi-Language",
            "Enhanced Features"
        ),
        "primary" => false
    ],
    [
        "product_name" => "Enterprise Plan",
        "product_price" => "234",
        "product_billing" => "Mo",
        "product_description" => "Enjoy the most professional plan",
        "product_features" => array(
            "Unlimited Interactions",
            "Advanced Reporting",
            "24/7 Support",
            "Custom Solutions",
            "Tailored Development"
        ),
        "primary" => false
    ]
];


// convert the price to 2 decimal places
foreach ($products as $ind => $product) {
    $price = $product["product_price"];
    $price = number_format((float)$price, 2, '.', '');
    $products[$ind]["product_price"] = $price;
}
