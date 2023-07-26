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
      a.disabled {
          pointer-events: none;
          color: #ccc;
      }
    </style>
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
    <?php
      $success = $this->session->flashdata('success');
      if ($success) {
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
                icon: 'success',
                title: '&nbsp;<?php echo $success ?>'
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
                        <div class="-intro-x mt-4 flex items-center" style="justify-content:space-between;">
                          <img alt="" class="intro-x w-56 mb-2" src="<?= base_url() ?>assets/images/logoBI.png">
                          <a href="<?= base_url() ?>logout" class="btn btn-danger py-3 px-4 align-top">Log Out</a>
                        </div>
                        <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Pension Fund Tracker</div>
                          <p class="-intro-x text-md font-base">Terima kasih telah registrasi akun Pension Fund Tracker. Kami akan melakukan verifikasi akun setiap pukul 11.00 dan 16.00 WIB pada hari kerja. Anda dapat mulai login 15 menit setelah cutoff time verifikasi. Informasi dan pertanyaan lebih lanjut dapat menghubungi Sdr. Arzizal melalui chat Ms. Teams.</p>
                          <div class="-intro-x mt-4 flex items-center justify-between">
                            <!-- tanda -->
                          </div>
                          <script>
                            let countDownTime = 600;

                            if (localStorage.getItem("countDownTime")) {
                              countDownTime = parseInt(localStorage.getItem("countDownTime"));

                              startCountdown();
                            } else {
                              countDownTime = 600;
                              startCountdown();
                            }
                            function startCountdown() {
                              let countdown = setInterval(function() {
                                countDownTime--;

                                let minutes = Math.floor(countDownTime / 60);
                                let seconds = countDownTime % 60;

                                let timeString = `${minutes} menit ${seconds} detik`;

                                document.getElementById("countdown").innerHTML = timeString;
                                localStorage.setItem("countDownTime", countDownTime);

                                if (countDownTime <= 0) {
                                  clearInterval(countdown);
                                  document.getElementById("btn-email").classList.remove('disabled');
                                  localStorage.removeItem("countDownTime");
                                }
                              }, 1000);
                            }
                          </script>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        <script>
          $("#btn-email").on("click", function (e) {
            e.preventDefault();
            const href = $(this).attr("href");

            Swal.fire({
              title: "Kirim Ulang Pesan Verifikasi",
              text: "Setelah menekan tombol kirim, periksa pada kotak masuk atau/spam anda atau hubungi Sdr. Arzizal melalui Ms. Teams untuk info kebih lanjut.",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Kirim",
              cancelButtonText: "Batalkan",
            }).then((result) => {
              if (result.isConfirmed) {  
                localStorage.removeItem("countDownTime");
                document.location.href = href;
              }
            });
          });
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
