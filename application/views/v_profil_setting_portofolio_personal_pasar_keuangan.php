
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
                            <a class="flex items-center mt-5" href="<?= site_url() ?>profil/1"> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Biodata Pengguna </a>
                            <a class="flex items-center mt-5" href="<?= site_url() ?>profil/update-tracking-pengguna/1"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Update Tracking Data </a>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center" href="<?= site_url() ?>profil/setting_nilai_asumsi/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Nilai Asumsi </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-ppip/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio PPIP </a>
                            <a class="flex items-center mt-5 text-primary font-medium" href="<?= base_url() ?>profil/setting-portofolio-personal-pasar-keuangan/1"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio Personal Pasar Keuangan </a>
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
                        <label for="" class="form-label">Pilih Setting Portofolio Personal Pasar Keuangan</label>
                        <select class="form-select form-select-lg mt-2" aria-label=".form-select-lg example">
                            <option selected disabled>Pilih</option>
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
                                        <th class="whitespace-nowrap">Capital Market Ecpectation</th>
                                        <th class="whitespace-nowrap">Tranche 1</th>
                                        <th class="whitespace-nowrap">Tranche 2</th>
                                        <th class="whitespace-nowrap">Tranche 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Return Portofolio Personal</td>
                                        <td>8.02%</td>
                                        <td>7.82%</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>Risiko Pasar Portofolio Personal</td>
                                        <td>13.21%</td>
                                        <td>12.05%</td>
                                        <td>0.13%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Komposisi Investasi</td>
                                    </tr>
                                    <tr>
                                        <td>Saham</td>
                                        <td>50%</td>
                                        <td>30%</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan Tetap</td>
                                        <td>20%</td>
                                        <td>30%</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td>Deposito</td>
                                        <td>5%</td>
                                        <td>5%</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>Rekda Dana Saham</td>
                                        <td>20%</td>
                                        <td>30%</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td>Rekda Dana Pendapatan Tetap</td>
                                        <td>5%</td>
                                        <td>5%</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td>Rekda Dana Campuran</td>
                                        <td>0%</td>
                                        <td>0%</td>
                                        <td>0%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Asumsi Return Investasi  - Personal pada Pasar Keuangan</td>
                                    </tr>
                                    <tr>
                                        <td>Saham</td>
                                        <td>8.76%</td>
                                        <td>8.76%</td>
                                        <td>8.76%</td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan Tetap</td>
                                        <td>6.75%</td>
                                        <td>6.75%</td>
                                        <td>6.75%</td>
                                    </tr>
                                    <tr>
                                        <td>Deposito</td>
                                        <td>4%</td>
                                        <td>4%</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Saham</td>
                                        <td>8.76%</td>
                                        <td>8.76%</td>
                                        <td>8.76%</td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pendapatan Tetap</td>
                                        <td>6.75%</td>
                                        <td>6.75%</td>
                                        <td>6.75%</td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pasar Uang</td>
                                        <td>4%</td>
                                        <td>4%</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Campuran</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Asumsi Risiko Pasar Investasi  - Personal pada Pasar Keuangan</td>
                                    </tr>
                                    <tr>
                                        <td>Saham</td>
                                        <td>17.57%</td>
                                        <td>17.57%</td>
                                        <td>17.57%</td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan Tetap</td>
                                        <td>11.54%</td>
                                        <td>11.54%</td>
                                        <td>11.54%</td>
                                    </tr>
                                    <tr>
                                        <td>Deposito</td>
                                        <td>0.13%</td>
                                        <td>0.13%</td>
                                        <td>0.13%</td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Saham</td>
                                        <td>0.13%</td>
                                        <td>0.13%</td>
                                        <td>0.13%</td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pendapatan Tetap</td>
                                        <td>17.57%</td>
                                        <td>17.57%</td>
                                        <td>17.57%</td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pasar Uang</td>
                                        <td>0.13%</td>
                                        <td>0.13%</td>
                                        <td>0.13%</td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Campuran</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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