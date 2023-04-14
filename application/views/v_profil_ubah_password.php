
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
<div class="wrapper wrapper--top-nav">
    <div class="wrapper-box">
        <!-- BEGIN: Content -->
        <div class="content">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Informasi & Data Profil Pengguna
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <!-- BEGIN: Profile Menu -->
                <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
                    <div class="intro-y box mt-5 lg:mt-0">
                        <div class="relative flex items-center p-5">
                            <div class="w-12 h-12 image-fit">
                                <img alt="" class="rounded-full" src="<?= base_url() ?>assets/images/user.png">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium text-base"><?= implode(' ', array_slice(explode(' ', $this->session->userdata('pension_fund_tracker_data')['nama']), 0, 2)) ?></div>
                                <div class="text-slate-500">Pengguna</div>
                            </div>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center mt-5" href="<?= site_url() ?>profil/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Biodata Pengguna </a>
                            <a class="flex items-center mt-5" href="<?= site_url() ?>profil/update-tracking-pengguna/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Update Tracking Data </a>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center" href="<?= site_url() ?>profil/setting_nilai_asumsi/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Nilai Asumsi </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-ppip/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio PPIP </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-personal-pasar-keuangan/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio Personal Pasar Keuangan </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-treatment-pembayaran-setelah-pensiun/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Treatment Pembayaran Setelah Pensiun </a>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center mt-5 text-primary font-medium" href="<?= base_url() ?>profil/ubah-password/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Ubah Password </a>
                        </div>
                    </div>
                    <div class="intro-y box p-5 bg-primary text-white mt-5">
                        <div class="flex items-center">
                            <div class="font-medium text-lg">Informasi Penting</div>
                            <div class="text-xs bg-white dark:bg-primary dark:text-white text-slate-700 px-1 rounded-md ml-auto"><i data-lucide="info" class="w-4 h-4"></i></div>
                        </div>
                        <div class="mt-4">
                          Karena nilai Gaji dan PhDP anda tidak kami simpan kedalam database untuk mendukung privasi pengguna. Mohon untuk melakukan pengisian Gaji dan PhDP setiap setelah anda login untuk melakukan tracking data.
                        </div>
                    </div>
                </div>
                <!-- END: Profile Menu -->
                <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                    <form id="myForm" class="intro-y box col-span-12 2xl:col-span-6 py-5" action="<?= base_url() ?>ubah-password/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>" method="post">
                        <div class="grid grid-cols-12 gap-6 p-5">
                            <div class="col-span-12 lg:col-span-6 p-5">
                                <label for="password1" class="form-label">Password Baru</label>
                                <div class="password-container">
                                    <input type="password" name="password" id="password1" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" required>
                                    <span id="toggle-password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="eye" data-lucide="eye" class="lucide lucide-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </span>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6 p-5">
                                <label for="password2" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" id="password2" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation" required>
                                <div class="text-danger mt-2" id="password-mismatch-msg" style="display:none;">Password tidak cocok!</div>
                            </div>
                            <div class="col-span-12 mt-2 mb-2 p-5 text-right">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Content -->
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
  const form = document.getElementById('myForm'); 
  form.addEventListener('submit', function(e) {
    e.preventDefault();

    Swal.fire({
          title: "Konfirmasi Pilihan Anda",
          text: "Apakah anda yakin dengan pilihan anda?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ubah Password?",
          cancelButtonText: "Kembali",
      }).then((result) => {
          if (result.isConfirmed) {  
            form.submit();
          }
      });
  });
</script>