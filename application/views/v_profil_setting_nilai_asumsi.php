
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
                            <a class="flex items-center text-primary font-medium" href="<?= site_url() ?>profil/setting_nilai_asumsi/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Nilai Asumsi </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-ppip/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio PPIP </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-personal/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio Personal Pasar Keuangan </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-treatment-pembayaran-setelah-pensiun/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Treatment Pembayaran Setelah Pensiun </a>
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
                <form id="myForm" class="intro-y col-span-12 lg:col-span-8 2xl:col-span-9" action="<?= base_url() ?>setting-nilai-asumsi" method="post">
                    <div class="grid grid-cols-12 gap-6">
                      <div class="col-span-12">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">Informasi Nilai Asumsi</th>
                                        <th class="whitespace-nowrap">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tambahan Iuran Mandiri PPIP</td>
                                        <td>
                                            <div class="input-group">
                                                <input id="tambahan_iuran" name="tambahan_iuran" value="<?= $data_setting_nilai_asumsi ? $data_setting_nilai_asumsi[0]['tambahan_iuran'] : '' ?>" type="number" class="form-control" placeholder="" required step="any">
                                                <div class="input-group-text">%</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pembayaran Iuran Personal</td>
                                        <td>
                                            <div class="input-group">
                                                <input id="jumlah_pembayaran_iuran_personal" name="jumlah_pembayaran_iuran_personal" value="<?= $data_setting_nilai_asumsi ? $data_setting_nilai_asumsi[0]['jumlah_pembayaran_iuran_personal'] : '' ?>"  type="number" class="form-control" placeholder="" required step="any">  
                                                <div class="input-group-text">%</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kenaikan Iuran Personal</td>
                                        <td>
                                            <div class="input-group">
                                                <input id="kenaikan_iuran_personal" name="kenaikan_iuran_personal" type="number" class="form-control" value="<?= $data_setting_nilai_asumsi ? $data_setting_nilai_asumsi[0]['kenaikan_iuran_personal'] : '' ?>" placeholder="" required step="any">
                                                <div class="input-group-text">%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>
                      <div class="col-span-12">
                        <div class="mt-2 mb-2 text-right">
                          <button type="submit" class="btn btn-success">Update & Simpan</button>
                        </div>
                      </div>
                    </div>
                </form>
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
          confirmButtonText: "Submit & Update Setting Nilai Asumsi Saya",
          cancelButtonText: "Kembali",
      }).then((result) => {
          if (result.isConfirmed) {  
            form.submit();
          }
      });
  });
</script>