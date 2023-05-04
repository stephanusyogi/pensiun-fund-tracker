
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
                            <a class="flex items-center mt-5 text-primary font-medium" href="<?= base_url() ?>profil/setting-portofolio-personal/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio Personal Pasar Keuangan </a>
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
                <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                    <div class="grid grid-cols-12 gap-6">
                        <form id="myForm" class="col-span-12 border-b" action="<?= base_url() ?>setting-portofolio-personal" method="post">
                            <label for="" class="form-label">Pilih Setting Portofolio Personal Keuangan</label>
                            <select id="jenis_investasi" class="form-select form-select-lg mt-2" name="id_portofolio_personal" aria-label=".form-select-lg example" required>
                                <option value="">Pilih</option>
                                <?php foreach ($opsi_setting_personal as $key) { ?>
                                    <option value="<?= $key['id'] ?>"><?= $key['nama'] ?></option>
                                <?php } ?>
                            </select>
                            <br>
                            <div class="mt-2 mb-2 flex gap-4" style="justify-content: end;">
                                <p id="clearSearch" class="btn btn-danger" style="display:none;">Clear Result</p>
                                <button type="submit" class="btn btn-success">Update & Simpan</button>
                            </div>
                        </form>
                      <div class="col-span-12">
                        <div class="overflow-x-auto" id="containerUser">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">Informasi Portofolio Personal Terpilih</th>
                                        <th class="whitespace-nowrap" colspan="3"><?= $data_setting_personal ? $data_setting_personal[0]['nama'] : '' ?></th>
                                    </tr>
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
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['return_portofolio_personal_t1']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['return_portofolio_personal_t2']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['return_portofolio_personal_t3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Risiko Pasar Portofolio Personal</td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['resiko_pasar_portofolio_personal_t1']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['resiko_pasar_portofolio_personal_t2']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['resiko_pasar_portofolio_personal_t3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Komposisi Investasi</td>
                                    </tr>
                                    <tr>
                                        <td>Saham</td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['saham_t1']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['saham_t2']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['saham_t3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan Tetap</td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['pendapatan_tetap_t1']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['pendapatan_tetap_t2']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['pendapatan_tetap_t3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Deposito</td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['deposito_t1']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['deposito_t2']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['deposito_t3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Rekda Dana Saham</td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['reksadana_saham_t1']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['reksadana_saham_t2']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['reksadana_saham_t3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Rekda Dana Pendapatan Tetap</td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['reksadana_pendapatan_tetap_t1']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['reksadana_pendapatan_tetap_t2']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['reksadana_pendapatan_tetap_t3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Rekda Dana Campuran</td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['reksadana_campuran_t1']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['reksadana_campuran_t2']."%" : '' ?></td>
                                        <td><?= $data_setting_komposisi ? $data_setting_komposisi[0]['reksadana_campuran_t3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Asumsi Return Investasi  - Personal pada Pasar Keuangan</td>
                                    </tr>
                                    <tr>
                                        <td>Saham</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_s_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_s_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_s_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan Tetap</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_pt_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_pt_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_pt_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Deposito</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_d_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_d_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_d_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Saham</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_s_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_s_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_s_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pendapatan Tetap</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_pt_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_pt_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_pt_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pasar Uang</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_pu_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_pu_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_pu_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Campuran</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_c_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_c_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['return_r_c_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Asumsi Risiko Pasar Investasi  - Personal pada Pasar Keuangan</td>
                                    </tr>
                                    <tr>
                                        <td>Saham</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_s_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_s_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_s_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan Tetap</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_pt_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_pt_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_pt_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Deposito</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_d_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_d_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_d_tranche1']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Saham</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_s_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_s_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_s_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pendapatan Tetap</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_pt_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_pt_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_pt_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pasar Uang</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_pu_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_pu_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_pu_tranche3']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Campuran</td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_c_tranche1']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_c_tranche2']."%" : '' ?></td>
                                        <td><?= $data_setting_personal ? $data_setting_personal[0]['resiko_r_c_tranche3']."%" : '' ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="overflow-x-auto" id="containerSelected" style="display:none;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">Informasi Portofolio Personal Terpilih</th>
                                        <th class="whitespace-nowrap" colspan="3" id="namaPortofolio"></th>
                                    </tr>
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
                                        <td id="return_portofolio_personal_t1"></td>
                                        <td id="return_portofolio_personal_t2"></td>
                                        <td id="return_portofolio_personal_t3"></td>
                                    </tr>
                                    <tr>
                                        <td>Risiko Pasar Portofolio Personal</td>
                                        <td id="resiko_pasar_portofolio_personal_t1"></td>
                                        <td id="resiko_pasar_portofolio_personal_t2"></td>
                                        <td id="resiko_pasar_portofolio_personal_t3"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Komposisi Investasi</td>
                                    </tr>
                                    <tr>
                                        <td>Saham</td>
                                        <td id="saham_t1"></td>
                                        <td id="saham_t2"></td>
                                        <td id="saham_t3"></td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan Tetap</td>
                                        <td id="pendapatan_tetap_t1"></td>
                                        <td id="pendapatan_tetap_t2"></td>
                                        <td id="pendapatan_tetap_t3"></td>
                                    </tr>
                                    <tr>
                                        <td>Deposito</td>
                                        <td id="deposito_t1"></td>
                                        <td id="deposito_t2"></td>
                                        <td id="deposito_t3"></td>
                                    </tr>
                                    <tr>
                                        <td>Rekda Dana Saham</td>
                                        <td id="reksadana_saham_t1"></td>
                                        <td id="reksadana_saham_t2"></td>
                                        <td id="reksadana_saham_t3"></td>
                                    </tr>
                                    <tr>
                                        <td>Rekda Dana Pendapatan Tetap</td>
                                        <td id="reksadana_pendapatan_tetap_t1"></td>
                                        <td id="reksadana_pendapatan_tetap_t2"></td>
                                        <td id="reksadana_pendapatan_tetap_t3"></td>
                                    </tr>
                                    <tr>
                                        <td>Rekda Dana Pasar Uang</td>
                                        <td id="reksadana_pasar_uang_t1"></td>
                                        <td id="reksadana_pasar_uang_t2"></td>
                                        <td id="reksadana_pasar_uang_t3"></td>
                                    </tr>
                                    <tr>
                                        <td>Rekda Dana Campuran</td>
                                        <td id="reksadana_campuran_t1"></td>
                                        <td id="reksadana_campuran_t2"></td>
                                        <td id="reksadana_campuran_t3"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Asumsi Return Investasi  - Personal pada Pasar Keuangan</td>
                                    </tr>
                                    <tr>
                                        <td>Saham</td>
                                        <td id="return_s_tranche1"></td>
                                        <td id="return_s_tranche2"></td>
                                        <td id="return_s_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan Tetap</td>
                                        <td id="return_pt_tranche1"></td>
                                        <td id="return_pt_tranche2"></td>
                                        <td id="return_pt_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Deposito</td>
                                        <td id="return_d_tranche1"></td>
                                        <td id="return_d_tranche2"></td>
                                        <td id="return_d_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Saham</td>
                                        <td id="return_r_s_tranche1"></td>
                                        <td id="return_r_s_tranche2"></td>
                                        <td id="return_r_s_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pendapatan Tetap</td>
                                        <td id="return_r_pt_tranche1"></td>
                                        <td id="return_r_pt_tranche2"></td>
                                        <td id="return_r_pt_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pasar Uang</td>
                                        <td id="return_r_pu_tranche1"></td>
                                        <td id="return_r_pu_tranche2"></td>
                                        <td id="return_r_pu_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Campuran</td>
                                        <td id="return_r_c_tranche1"></td>
                                        <td id="return_r_c_tranche2"></td>
                                        <td id="return_r_c_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Asumsi Risiko Pasar Investasi  - Personal pada Pasar Keuangan</td>
                                    </tr>
                                    <tr>
                                        <td>Saham</td>
                                        <td id="resiko_s_tranche1"></td>
                                        <td id="resiko_s_tranche2"></td>
                                        <td id="resiko_s_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan Tetap</td>
                                        <td id="resiko_pt_tranche1"></td>
                                        <td id="resiko_pt_tranche2"></td>
                                        <td id="resiko_pt_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Deposito</td>
                                        <td id="resiko_d_tranche1"></td>
                                        <td id="resiko_d_tranche2"></td>
                                        <td id="resiko_d_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Saham</td>
                                        <td id="resiko_r_s_tranche1"></td>
                                        <td id="resiko_r_s_tranche2"></td>
                                        <td id="resiko_r_s_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pendapatan Tetap</td>
                                        <td id="resiko_r_pt_tranche1"></td>
                                        <td id="resiko_r_pt_tranche2"></td>
                                        <td id="resiko_r_pt_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Pasar Uang</td>
                                        <td id="resiko_r_pu_tranche1"></td>
                                        <td id="resiko_r_pu_tranche2"></td>
                                        <td id="resiko_r_pu_tranche3"></td>
                                    </tr>
                                    <tr>
                                        <td>Reksa Dana Campuran</td>
                                        <td id="resiko_r_c_tranche1"></td>
                                        <td id="resiko_r_c_tranche2"></td>
                                        <td id="resiko_r_c_tranche3"></td>
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
    
    function setDataToPage(data){
      // Nilai Variabel
      const nilai_personal_keuangan = data['personal_keuangan'][0];
      
      const namaPortofolio = document.getElementById("namaPortofolio");
      namaPortofolio.textContent = nilai_personal_keuangan.nama;

      delete nilai_personal_keuangan.id;
      delete nilai_personal_keuangan.nama;
      delete nilai_personal_keuangan.created_at;
      delete nilai_personal_keuangan.flag;
      const filteredPersonalKeuangan = Object.keys(nilai_personal_keuangan)
        .filter(key => !key.includes("korelasi_"))
        .reduce((newObj, key) => {
            newObj[key] = nilai_personal_keuangan[key];
            return newObj;
        }, {});

      const nilai_komposisi_investasi = data['komposisi_investasi'][0];
      delete nilai_komposisi_investasi.id;
      delete nilai_komposisi_investasi.id_setting_portofolio_personal_admin;
      delete nilai_komposisi_investasi.nama;
      delete nilai_komposisi_investasi.created_at;
      delete nilai_komposisi_investasi.flag;

      for (var key in filteredPersonalKeuangan) {
        var value = filteredPersonalKeuangan[key];
        eval("var " + key + " = " + value + ";");
        document.getElementById(key).textContent = value+"%";
      }

      for (var key in nilai_komposisi_investasi) {
        var value = nilai_komposisi_investasi[key];
        eval("var " + key + " = " + value + ";");
        document.getElementById(key).textContent = value+"%";
      }
      
    }

    const select = document.getElementById('jenis_investasi');
    const containerSelected = document.getElementById("containerSelected");
    const containerUser = document.getElementById("containerUser");
    const btnClearSearch = document.getElementById("clearSearch");

    select.addEventListener('change', function() {
        containerUser.style.display = "none";
        containerSelected.style.display = "block";
        btnClearSearch.style.display = "block";

        btnClearSearch.onclick = () => {
            containerSelected.style.display = "none";
            btnClearSearch.style.display = "none";
            containerUser.style.display = "block";
            select.selectedIndex = -1;
        }


        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;
        xhr.addEventListener("readystatechange", function() {
            if(this.readyState === 4) {
                let data = xhr.response;
                let response = JSON.parse(data);
                setDataToPage(response);
            }
        });
        xhr.open("GET", "<?= base_url() ?>profil/personal-by-id/"+select.value);
        xhr.send();
    });
</script>