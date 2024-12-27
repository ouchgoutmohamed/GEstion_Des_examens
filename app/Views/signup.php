<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>
</head>

<body>

    <div class="bg-gradient-to-r from-rose-100 to-teal-100 dark:from-gray-700 dark:via-gray-900 dark:to-black">

        <div class="h-screen w-screen flex justify-center items-center">

            <div class="2xl:w-1/4 lg:w-1/3 md:w-1/2 w-full">
                <div class="card overflow-hidden sm:rounded-md rounded-none">
                    <div class="p-6">
                        <a href="index.html" class="block mb-8">
                            <img class="h-6 block dark:hidden" src="assets/images/logo-dark.png" alt="">
                            <img class="h-6 hidden dark:block" src="assets/images/logo-light.png" alt="">
                        </a>

                        <form method="post" action="<?= base_url('signup') ?>">
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="LoggingEmailAddress">First Name</label>
                                <input name="first_name" id="LoggingEmailAddress" class="form-input" type="text" placeholder="Enter your Name" >
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="LoggingEmailAddress">Last Name</label>
                                <input name="last_name" id="LoggingEmailAddress" class="form-input" type="text" placeholder="Enter your Name" >
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="LoggingEmailAddress">Email Address</label>
                                <input name="email" id="LoggingEmailAddress" class="form-input" type="email" placeholder="Enter your email" >
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="LoggingEmailAddress">Phone Number</label>
                                <input name="phone" id="LoggingEmailAddress" class="form-input" type="email" placeholder="Enter your email" >
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="loggingPassword">Password</label>
                                <input name="password" id="loggingPassword" class="form-input" type="password" placeholder="Enter your password" >
                            </div>

                            <div class="flex justify-center mb-6">
                                <button type="submit" class="btn w-full text-white bg-primary"> Register </button>
                            </div>
                        </form>

                        <p class="text-gray-500 dark:text-gray-400 text-center">Already have account ?<a href="login.php" class="text-primary ms-1"><b>Log In</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>