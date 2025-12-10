<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION["user_id"])) {
    header("Location: dashboard/index.php");
}
?>

<!doctype html>
<html lang="en">

<head>


    <?php
    $pageInfo = [
        "title" => "Login",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>


<body>


    <?php include_once "includes/nav.php"; ?>


    <div class="flex justify-center h-screen items-center bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow">

            <form action="core/login.php" method="POST" class="space-y-4">

                <!-- Error Alert -->
                <?php if (isset($_SESSION["login_error"])) : ?>
                    <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded relative">
                        <strong class="font-bold">Oops! </strong>
                        <span class="block sm:inline"><?php echo $_SESSION["login_error"]; ?></span>
                    </div>
                    <?php unset($_SESSION["login_error"]); ?>
                <?php endif; ?>

                <!-- Email -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Email address</label>
                    <input type="email"
                        required
                        name="email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 
                              focus:ring-yellow-400 focus:outline-none"
                        placeholder="name@example.com"
                        value="<?php
                                if (isset($_SESSION['login_email'])) {
                                    echo $_SESSION['login_email'];
                                    unset($_SESSION['login_email']);
                                } ?>">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Password</label>
                    <input type="password"
                        required
                        name="password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 
                              focus:ring-yellow-400 focus:outline-none"
                        placeholder="Password">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    name="login"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold 
                           py-3 rounded-lg shadow transition">
                    Login
                </button>
            </form>

            <!-- Bottom Links -->
            <div class="flex flex-col sm:flex-row justify-between text-sm text-blue-600 mt-6">
                <a href="reset" class="hover:underline mb-2 sm:mb-0">
                    Forgot Password? Reset
                </a>
                <a href="register" class="hover:underline">
                    Don't have an account? Register
                </a>
            </div>

        </div>
    </div>



    <?php include_once "includes/footer.php"; ?>


    <?php include_once "includes/scripts.php"; ?>

</body>

</html>