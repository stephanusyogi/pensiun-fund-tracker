
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
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-personal/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio Personal Pasar Keuangan </a>
                            <a class="flex items-center mt-5 text-primary font-medium" href="<?= base_url() ?>profil/setting-treatment-pembayaran-setelah-pensiun/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Treatment Pembayaran Setelah Pensiun </a>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/ubah-password/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Ubah Password </a>
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
                    <form id="myForm" class="intro-y box col-span-12 2xl:col-span-6 p-5" action="<?= base_url() ?>setting-treatment-pembayaran-setelah-pensiun" method="post">
                        <div class="grid grid-cols-12 gap-6 p-5">
                        <div class="col-span-12 lg:col-span-6 border p-5">
                            <label for="ppmp" class="form-label">PPMP</label>
                            <input id="ppmp" name="ppmp" type="text" class="form-control" placeholder="" value="Dibayarkan oleh DAPENBI Secara Bulanan" readonly>
                        </div>
                        <div class="col-span-12 lg:col-span-6 border p-5">
                            <label for="personal_properti" class="form-label">Personal - Properti</label>
                            <input id="personal_properti" name="personal_properti" type="text" class="form-control" placeholder="" value="Sewa" readonly>
                        </div>
                        <div class="col-span-12 lg:col-span-6 border p-5">
                            <label for="ppip" class="form-label">PPIP</label>
                            <select id="ppip" name="ppip" class="form-select mb-2" aria-label=".form-select-lg example" onchange="inputChangePPIP()" required>
                                <option disabled selected>Pilih</option>
                                <option value="Beli Anuitas" <?= $data_setting_treatment ? ($data_setting_treatment[0]['ppip'] === 'Beli Anuitas') ? 'selected' : ''  : '' ?>>Beli Anuitas</option>
                                <option value="Kupon SBN/SBSN" <?= $data_setting_treatment ? ($data_setting_treatment[0]['ppip'] === 'Kupon SBN/SBSN') ? 'selected' : ''  : '' ?>>Kupon SBN/SBSN</option>
                            </select>
                            <br>
                            <label for="harga-anuitas-ppip" class="form-label">Harga Anuitas PPIP</label>
                            <input id="harga-anuitas-ppip" name="harga_anuitas_ppip" type="number" class="form-control" placeholder="" value="<?= $data_setting_treatment ? $data_setting_treatment[0]['harga_anuitas_ppip'] : '' ?>">
                            <p class="my-5">Jika Pembayaran PPIP Menggunakan Kupon SBN/SBSN</p>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="bunga-ppip" class="form-label">Bunga PPIP</label>
                                    <div class="input-group">
                                        <input id="bunga-ppip" name="bunga_ppip" type="number" class="form-control" placeholder="" value="<?= $data_setting_treatment ? $data_setting_treatment[0]['bunga_ppip'] : '' ?>">
                                        <div class="input-group-text">%</div>
                                    </div>
                                </div>
                                <div>
                                    <label for="pajak-ppip" class="form-label">Pajak PPIP</label>
                                    <div class="input-group">
                                        <input id="pajak-ppip" name="pajak_ppip" type="number" class="form-control" placeholder="" value="<?= $data_setting_treatment ? $data_setting_treatment[0]['pajak_ppip'] : '' ?>">
                                        <div class="input-group-text">%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <script>
                                function inputChangePPIP() {
                                    let selectedOption = document.getElementById("ppip").value;
                                    if(selectedOption === "Beli Anuitas") {
                                        document.getElementById("harga-anuitas-ppip").readOnly = false;
                                        document.getElementById("bunga-ppip").readOnly = true;
                                        document.getElementById("pajak-ppip").readOnly = true;
                                    } else if(selectedOption === "Kupon SBN/SBSN") {
                                        document.getElementById("bunga-ppip").readOnly = false;
                                        document.getElementById("pajak-ppip").readOnly = false;
                                        document.getElementById("harga-anuitas-ppip").readOnly = true;
                                    }
                                }
                            </script>
                        <div class="col-span-12 lg:col-span-6 border p-5">
                            <label for="" class="form-label">Personal - Pasar Keuangan</label>
                            <select id="personal" name="personal_pasar_keuangan" class="form-select  mb-2" aria-label=".form-select-lg example" onchange="inputChangePersonal()" required>
                                    <?php if($data_setting_treatment){ ?>
                                        <option value="<?= $data_setting_treatment[0]['personal_pasar_keuangan'] ?>"><?= $data_setting_treatment[0]['personal_pasar_keuangan'] ?></option>
                                    <?php }else{ ?>
                                        <option value="">Pilih</option>
                                    <?php } ?>
                                    <option value="Beli Anuitas">Beli Anuitas</option>
                                    <option value="Kupon SBN/SBSN">Kupon SBN/SBSN</option>
                            </select>
                            <br>
                            <label for="harga-anuitas-personal" class="form-label">Harga Anuitas Personal Pasar Keuangan</label>
                            <input id="harga-anuitas-personal" name="harga_anuitas_personal_pasar_keuangan" type="number" class="form-control" placeholder="" value="<?= $data_setting_treatment ? $data_setting_treatment[0]['harga_anuitas_personal_pasar_keuangan'] : '' ?>">
                            <p class="my-5">Jika Pembayaran Menggunakan Kupon SBN/SBSN</p>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="bunga-personal" class="form-label">Bunga Personal Pasar Keuangan</label>
                                    <div class="input-group">
                                        <input id="bunga-personal" name="bunga_personal_pasar_keuangan" type="number" class="form-control" placeholder="" value="<?= $data_setting_treatment ? $data_setting_treatment[0]['bunga_personal_pasar_keuangan'] : '' ?>">
                                        <div class="input-group-text">%</div>
                                    </div>
                                </div>
                                <div>
                                    <label for="pajak-personal" class="form-label">Pajak Personal Pasar Keuangan</label>
                                    <div class="input-group">
                                        <input id="pajak-personal" name="pajak_personal_pasar_keuangan" type="number" class="form-control" placeholder="" value="<?= $data_setting_treatment ? $data_setting_treatment[0]['pajak_personal_pasar_keuangan'] : '' ?>">
                                        <div class="input-group-text">%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <script>
                                function inputChangePersonal() {
                                    let selectedOption = document.getElementById("personal").value;
                                    if(selectedOption === "Beli Anuitas") {
                                        document.getElementById("harga-anuitas-personal").readOnly = false;
                                        document.getElementById("bunga-personal").readOnly = true;
                                        document.getElementById("pajak-personal").readOnly = true;
                                    } else if(selectedOption === "Kupon SBN/SBSN") {
                                        document.getElementById("bunga-personal").readOnly = false;
                                        document.getElementById("pajak-personal").readOnly = false;
                                        document.getElementById("harga-anuitas-personal").readOnly = true;
                                    }
                                }
                            </script>
                        </div>
                        <br>
                        <div class="mt-2 mb-2 text-right">
                        <button type="submit" class="btn btn-success">Update & Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>
</div>

<script>     
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
          confirmButtonText: "Submit & Update Setting Saya",
          cancelButtonText: "Kembali",
      }).then((result) => {
          if (result.isConfirmed) {  
            form.submit();
          }
      });
  });
</script>