
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
                                <div class="font-medium text-base">Stephanus Yogi</div>
                                <div class="text-slate-500">Pengguna</div>
                            </div>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center mt-5" href="<?= site_url() ?>profil/1"> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Biodata Pengguna </a>
                            <a class="flex items-center mt-5" href="<?= site_url() ?>profil/update-tracking-pengguna/1"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Update Tracking Data </a>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center" href="<?= site_url() ?>profil/setting_nilai_asumsi/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Nilai Asumsi </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-ppip/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio PPIP </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-personal-pasar-keuangan/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio Personal Pasar Keuangan </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-komposisi-investasi-lifeycle-fund/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Komposisi Investasi LifeCycle Fund </a>
                            <a class="flex items-center mt-5 text-primary font-medium" href="<?= base_url() ?>profil/setting-treatment-pembayaran-setelah-pensiun/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Treatment Pembayaran Setelah Pensiun </a>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/ubah-password/1"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Ubah Password </a>
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
                  <div class="intro-y box col-span-12 2xl:col-span-6 p-5">
                    <div class="grid grid-cols-12 gap-6 p-5">
                      <div class="col-span-12 lg:col-span-6 border p-5">
                          <label for="" class="form-label">PPMP</label>
                          <input id="" type="text" class="form-control" placeholder="" value="Dibayarkan oleh DAPENBI Secara Bulanan" readonly>
                      </div>
                      <div class="col-span-12 lg:col-span-6 border p-5">
                          <label for="" class="form-label">PPIP</label>
                          <select class="form-select  " aria-label=".form-select-lg example">
                              <option>Beli Anuitas</option>
                              <option>Bunga Deposito</option>
                          </select>
                      </div>
                      <div class="col-span-12 lg:col-span-6 border p-5">
                          <label for="" class="form-label">Personal - Pasar Keuangan</label>
                          <select class="form-select  mb-2" aria-label=".form-select-lg example">
                              <option>Beli Anuitas</option>
                              <option>Bunga Deposito</option>
                          </select>
                          <br>
                          <label for="" class="form-label">Harga Anuitas</label>
                          <input id="" type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col-span-12 lg:col-span-6 border p-5">
                          <label for="" class="form-label">Personal - Properti</label>
                          <input id="" type="text" class="form-control" placeholder="" value="Sewa" readonly>
                      </div>
                      <div class="col-span-12 lg:col-span-6 border p-5">
                          <p>Jika Pembayaran Menggunakan Bunga Deposito</p>
                          <label for="" class="form-label">Bunga Deposito</label>
                          <input id="" type="text" class="form-control" placeholder="" value="40%">
                          <br>
                          <label for="" class="form-label">Pajak Deposito</label>
                          <input id="" type="text" class="form-control" placeholder="" value="20%">
                      </div>
                    </div>
                    <br>
                    <div class="mt-2 mb-2 text-right">
                      <button type="submit" class="btn btn-success">Update & Simpan</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>
</div>