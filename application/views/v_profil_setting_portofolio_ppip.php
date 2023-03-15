
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
                            <a class="flex items-center mt-5 text-primary font-medium" href="<?= base_url() ?>profil/setting-portofolio-ppip/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio PPIP </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-personal-pasar-keuangan/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio Personal Pasar Keuangan </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-komposisi-investasi-lifeycle-fund/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Komposisi Investasi LifeCycle Fund </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-treatment-pembayaran-setelah-pensiun/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Treatment Pembayaran Setelah Pensiun </a>
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
                    <div class="grid grid-cols-12 gap-6">
                      <div class="col-span-12 border-b">
                        <label for="" class="form-label">Pilih Setting Portofolio PPIP</label>
                        <select class="form-select form-select-lg mt-2" aria-label=".form-select-lg example">
                            <option>Konvensional Reguler</option>
                            <option>Konvensional Plus</option>
                            <option>Syariah Reguler</option>
                            <option>Syariah Plus</option>
                        </select>
                        <br>
                        <div class="mt-2 mb-2 text-right">
                          <button type="submit" class="btn btn-success">Update & Simpan</button>
                        </div>
                      </div>
                      <div class="col-span-12">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">Informasi Portofolio PPIP Terpilih</th>
                                        <th class="whitespace-nowrap">Investasi</th>
                                        <th class="whitespace-nowrap">Likuiditas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Return Portofolio PPIP</td>
                                        <td>6.40%</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>Resiko Pasar Portofolio PPIP</td>
                                        <td>8.82%</td>
                                        <td>0.13%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Komposisi Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham</td>
                                        <td>10%</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap</td>
                                        <td>70%</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Deposito</td>
                                        <td>20%</td>
                                        <td>100%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Asumsi Return Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham</td>
                                        <td>8.76%</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap</td>
                                        <td>6.75%</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Deposito</td>
                                        <td>4%</td>
                                        <td>100%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Asumsi Return Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham</td>
                                        <td>17.57%</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap</td>
                                        <td>11.54%</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Deposito</td>
                                        <td>0.13%</td>
                                        <td>100%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>
</div>