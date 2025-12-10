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
        "title" => "Reset",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>

<?php
if (isset($_SESSION["user_id"])) {
    header("Location: index.php");
}
?>

<body>

    <?php include_once "includes/nav.php"; ?>


    <div class="flex justify-center h-screen items-center bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow">

            <form action="core/reset.php" method="POST" class="space-y-4">

                <h1 class="text-2xl font-semibold text-gray-800 mb-4">
                    Please Enter Your Email
                </h1>

                <!-- Error Alert -->
                <?php if (isset($_SESSION["reset_error"])) : ?>
                    <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded relative">
                        <strong class="font-bold">Oops! </strong>
                        <span class="block sm:inline"><?php echo $_SESSION["reset_error"]; ?></span>
                    </div>
                    <?php unset($_SESSION["reset_error"]); ?>
                <?php endif; ?>

                <!-- Success Alert -->
                <?php if (isset($_SESSION["reset_success"])) : ?>
                    <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded relative">
                        <strong class="font-bold">Success! </strong>
                        <span class="block sm:inline"><?php echo $_SESSION["reset_success"]; ?></span>
                    </div>
                    <?php unset($_SESSION["reset_success"]); ?>
                <?php endif; ?>

                <!-- Email Input -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Email address</label>
                    <input type="email"
                        required
                        name="email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 
                              focus:ring-yellow-400 focus:outline-none"
                        placeholder="name@example.com"
                        value="<?php
                                if (isset($_SESSION['reset_email'])) {
                                    echo $_SESSION['reset_email'];
                                    unset($_SESSION['reset_email']);
                                } ?>">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    name="reset"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold 
                           py-3 rounded-lg shadow transition">
                    Reset
                </button>

            </form>

            <!-- Links -->
            <div class="text-blue-600 mt-6 text-sm space-y-2">

                <a href="login" class="block hover:underline">
                    Back to Login
                </a>

                <a href="register" class="block hover:underline">
                    Don't have an account? Register
                </a>

            </div>

        </div>
    </div>



    <?php include_once "includes/footer.php"; ?>


    <?php include_once "includes/scripts.php"; ?>

</body>

</html>