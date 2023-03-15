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
    <!-- Alert Error -->
    <?php
      $error = $this->session->flashdata('error');
      if ($error) {
      ?>
        <script type="text/javascript">
            $(function() {
              const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 5000
              });

              Toast.fire({
                icon: 'error',
                title: '&nbsp;<?php echo $error ?>'
              })
            });
        </script>
      <?php }
    ?>
    <!-- END: Head -->
    <body class="login">
        <div class="px-2">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
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
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <img alt="" class="intro-x w-56 mb-2" src="<?= base_url() ?>assets/images/logoBI.png">
                        <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Pension Fund Tracker</div>
                        <form action="<?= base_url() ?>" method="post">
                          <div class="intro-x mt-8">
                              <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email">
                              <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                          </div>
                          <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                              <a href="<?= base_url() ?>forgot-password">Forgot Password?</a> 
                          </div>
                          <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                              <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                              <a href="<?= base_url() ?>register" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Register</a>
                          </div>
                          <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"> By signin up, you agree to our <a class="text-primary dark:text-slate-200" href="">Terms and Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy Policy</a> </div>
                        </form>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="<?= base_url() ?>assets/template/dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>