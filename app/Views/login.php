<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | Gestion des examens</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="LoggingEmailAddress">Email Address</label>
                            <input id="LoggingEmailAddress" class="form-input" type="email" placeholder="Enter email" >
                        </div>
                        <form method="post" action="<?= base_url('login') ?>">
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="loggingPassword">Password</label>
                                <input id="loggingPassword" class="form-input" type="password" placeholder="Enter password" >
                            </div>

                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-checkbox rounded" id="checkbox-signin">
                                    <label class="ms-2" for="checkbox-signin">Remember me</label>
                                </div>
                                <a href="auth-recoverpw.html" class="text-sm text-primary border-b border-dashed border-primary">Forget Password ?</a>
                            </div>

                            <div class="flex justify-center mb-6">
                                <button class="btn w-full text-white bg-primary"> Log In </button>
                            </div>

                            <div class="flex items-center my-6">
                                <div class="flex-auto mt-px border-t border-dashed border-gray-200 dark:border-slate-700"></div>
                                <div class="mx-4 text-secondary">Or</div>
                                <div class="flex-auto mt-px border-t border-dashed border-gray-200 dark:border-slate-700"></div>
                            </div>

                            <div class="flex gap-4 justify-center mb-6">
                                <a href="javascript:void(0)" class="btn border-light text-gray-400 dark:border-slate-700">
                                    <span class="flex justify-center items-center gap-2">
                                        <i class="mgc_github_line text-info text-xl"></i>
                                        <span class="lg:block hidden">Github</span>
                                    </span>
                                </a>
                                <a href="javascript:void(0)" class="btn border-light text-gray-400 dark:border-slate-700">
                                    <span class="flex justify-center items-center gap-2">
                                        <i class="mgc_google_line text-danger text-xl"></i>
                                        <span class="lg:block hidden">Google</span>
                                    </span>
                                </a>
                                <a href="javascript:void(0)" class="btn border-light text-gray-400 dark:border-slate-700">
                                    <span class="flex justify-center items-center gap-2">
                                        <i class="mgc_facebook_line text-primary text-xl"></i>
                                        <span class="lg:block hidden">Facebook</span>
                                    </span>
                                </a>
                            </div>
                        </form>
                        <p class="text-gray-500 dark:text-gray-400 text-center">Don't have an account ?<a href="auth-register.html" class="text-primary ms-1"><b>Register</b></a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>


<!-- Mirrored from coderthemes.com/konrix/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2024 16:25:16 GMT -->
</html>