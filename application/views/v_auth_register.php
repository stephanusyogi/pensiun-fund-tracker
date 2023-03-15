<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="<?= base_url() ?>assets/images/logoBI_2.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Bank Indonesia, Pension Fund Tracker">
        <title>Pension Fund Tracker</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="<?= base_url() ?>assets/template/dist/css/app.css" />
        <!-- END: CSS Assets-->
        <!-- Toast -->
        <link rel="stylesheet" href="<?= base_url('/assets/plugins'); ?>/toastr/toastr.min.css">
        <link rel="stylesheet" href="<?= base_url('/assets/plugins'); ?>/chart.js/chart.min.css">
        <!-- Datatables -->
        <link rel="stylesheet" href="<?= base_url('assets/plugins'); ?>/datatables-bs4/css/dataTables.bootstrap4.css">
        <!-- jQuery -->
        <script src="<?= base_url("assets/plugins/") ?>/jquery/jquery.min.js"></script>
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="px-2">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Register Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <div class="my-auto">
                        <div>
                          <img alt="" class="-intro-x w-3/4 mx-auto" src="<?= base_url() ?>assets/images/sign_ilustration.png">
                        </div>
                        <div class="-intro-x text-white text-center font-medium text-4xl leading-tight mt-5">
                          Pension Fund Tracker
                        </div>
                    </div>
                </div>
                <!-- END: Register Info -->
                <!-- BEGIN: Register Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <img alt="" class="intro-x w-56 mb-2" src="<?= base_url() ?>assets/images/logoBI.png">
                        <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Pension Fund Tracker</div>
                        <form action="<?= base_url() ?>email-verification" method="post">
                            <div class="intro-x mt-8">
                                <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Name">
                                <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email">
                                <p class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm">Pastikan email anda aktif untuk aktivasi.</p> 
                                <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                                <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation">
                            </div>
                            <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                <label class="cursor-pointer select-none" for="remember-me">I agree to the </label>
                                <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>. 
                            </div>
                            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                                <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                                <a href="<?= base_url() ?>login" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign in</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END: Register Form -->
            </div>
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="<?= base_url() ?>assets/template/dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>