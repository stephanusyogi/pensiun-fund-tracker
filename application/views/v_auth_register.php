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
    <style>
      .password-container {
        position: relative;
      }

      #toggle-password {
        position: absolute;
        top: 50%;
        right: 10px;
        z-index: 100;
        transform: translateY(-50%);
        cursor: pointer;
      }
    </style>
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
                        <form action="<?= base_url() ?>register-verification" method="post">
                            <div class="intro-x mt-8">
                                <input type="text" name="nama" class="intro-x login__input form-control py-3 px-4 block" placeholder="Name" required>
                                <input type="text" name="email" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email" required>
                                <p class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm">Pastikan email anda aktif untuk aktivasi.</p> 
                                <div class="password-container">
                                    <input type="password" name="password" id="password1" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" required>
                                    <span id="toggle-password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="eye" data-lucide="eye" class="lucide lucide-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </span>
                                </div>
                                <input type="password" id="password2" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation" required>
                                <div class="text-danger mt-2" id="password-mismatch-msg" style="display:none;">Password tidak cocok!</div>
                                <input type="text" name="no_hp" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Kode Referensi"  required>
                            </div>
                            <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                                <input id="agree-policy" type="checkbox" class="form-check-input border mr-2" required>
                                <label class="cursor-pointer select-none" for="agree-policy">I agree to the </label>
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
        <script>
            const password1 = document.querySelector('#password1');
            const password2 = document.querySelector('#password2');
            const passwordMismatchMsg = document.querySelector('#password-mismatch-msg');
            const togglePassword = document.querySelector('#toggle-password');

            password2.addEventListener('input', checkPassword);            

            togglePassword.addEventListener('click', function () {
                const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
                password1.setAttribute('type', type);
                this.innerHTML = type === 'password' ? '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="eye" data-lucide="eye" class="lucide lucide-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>' : '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="eye-off" data-lucide="eye-off" class="lucide lucide-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>';
            });

            function checkPassword() {
                if (password1.value !== password2.value) {
                    passwordMismatchMsg.style.display = 'block';
                } else {
                    passwordMismatchMsg.style.display = 'none';
                }
            }
        </script>
        <!-- BEGIN: JS Assets-->
        <script src="<?= base_url() ?>assets/template/dist/js/app.js"></script>
        <!-- END: JS Assets-->

        <!-- Toast -->
        <script src="<?= base_url('assets/plugins'); ?>/toastr/toastr.min.js"></script>  
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </body>
</html>
