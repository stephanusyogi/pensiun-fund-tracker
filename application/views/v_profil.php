
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
                            <a class="flex items-center mt-5 text-primary font-medium" href="<?= site_url() ?>profil/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Biodata Pengguna </a>
                            <a class="flex items-center mt-5" href="<?= site_url() ?>profil/update-tracking-pengguna/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Update Tracking Data </a>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center" href="<?= site_url() ?>profil/setting_nilai_asumsi/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Nilai Asumsi </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-ppip/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio PPIP </a>
                            <a class="flex items-center mt-5" href="<?= base_url() ?>profil/setting-portofolio-personal-pasar-keuangan/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio Personal Pasar Keuangan </a>
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
                        <!-- BEGIN: Announcement -->
                        <?php if($data_pengumuman){ ?>
                          <div class="intro-y box col-span-12 2xl:col-span-6">
                              <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                  <h2 class="font-medium text-base mr-auto">
                                      Pengumuman
                                  </h2>
                                  <button data-carousel="announcement" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                                  <button data-carousel="announcement" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button>
                              </div>
                              <div class="tiny-slider py-5" id="announcement">
                                <?php foreach ($data_pengumuman as $key) { ?>
                                  <div class="px-5">
                                      <div class="font-medium text-lg"><?= $key['judul'] ?></div>
                                      <div class="text-slate-600 dark:text-slate-500 mt-2">
                                      <?= $key['deskripsi'] ?>
                                      </div>
                                  </div>
                                <?php } ?>
                              </div>
                          </div>
                        <?php } ?>
                        <!-- END: Announcement -->
                        <form id="myForm" class="intro-y box col-span-12 2xl:col-span-6" action="<?= base_url() ?>profil-update/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>" method="post">
                          <div class="grid grid-cols-12 gap-6 p-5">
                            <div class="col-span-12 lg:col-span-4">
                                <label for="nama" class="form-label">Nama</label>
                                <input id="nama" name="nama" value="<?= $data_user['nama'] ?>" type="text" class="form-control" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" value="<?= $data_user['email'] ?>" type="text" class="form-control" placeholder="" readonly>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="nip" class="form-label">NIP</label>
                                <input id="nip" name="nip" value="<?= $data_user['nip'] ? $data_user['nip'] : '' ?>" type="text" class="form-control" placeholder="Masukkan NIP">
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="satker" class="form-label">Satuan Kerja</label>
                                <select class="form-select" id="satker" name="satker" aria-label=".form-select-lg example">
                                  <?php if ($data_user['satker']) { ?>
                                    <option value="<?= $data_user['satker'] ?>" selected><?= $data_user['satker'] ?></option>
                                  <?php }else{ ?>
                                    <option selected disabled>Pilih Satuan Kerja</option>
                                  <?php } ?>
                                  <option value="Departemen Kebijakan Ekonomi dan Moneter">DKEM</option>
                                  <option value="Departemen Pengelolaan Devisa">DPD</option>
                                  <option value="Departemen Manajemen Strategis dan Tata kelola">DMST</option>
                                  <option value="Departemen Pengembangan Pasar Keuangan">DPPK</option>
                                  <option value="Institut Bank Indonesia">BINS</option>
                                  <option value="Departemen Kebijakan Makroprudensial">DKMP</option>
                                  <option value="Departemen Pengembangan dan Inovasi Digital">DPID</option>
                                  <option value="Departemen Inovasi dan Digitalisasi Data">DIDD</option>
                                  <option value="Departemen Layanan Digital dan Keamanan Siber">DLDS</option>
                                  <option value="Departemen Internasional">DINT</option>
                                  <option value="Departemen Regional">DR</option>
                                  <option value="Departemen Pengelolaan Moneter">DPM</option>
                                  <option value="Departemen Pengembangan UMKM dan Perlindungan Konsumen">DUPK</option>
                                  <option value="Departemen Ekonomi dan Keuangan Syariah">DEKS</option>
                                  <option value="Departemen Manajemen Risiko">DMR</option>
                                  <option value="Departemen Pengelolaan Kepatuhan Laporan">DPKL</option>
                                  <option value="Departemen Komunikasi">DKOM</option>
                                  <option value="Departemen Hukum">DHK</option>
                                  <option value="Departemen Pengadaan Strategis">DPS</option>
                                  <option value="Departemen Penyelenggara Sistem Pembayaran">DPSP</option>
                                  <option value="Unit Khusus Pembangunan SPU-DC dan BRS">UKPS</option>
                                  <option value="Departemen Sumber Daya Manusia">DSDM</option>
                                  <option value="Departemen Pengelolaan Logistik dan Fasilitas">DPLF</option>
                                  <option value="Departemen Surveillance Sistem Keuangan">DSSK</option>
                                  <option value="Departemen Statistik">DSTA</option>
                                  <option value="Departemen Kebijakan Sistem Pembayaran">DKSP</option>
                                  <option value="Departemen Jasa Perbankan Perizinan dan Operasional Tresuri">DPPT</option>
                                  <option value="Departemen Audit Internal">DAI</option>
                                  <option value="Departemen Pengelolaan Uang">DPU</option>
                                  <option value="Departemen Keuangan">DKEU</option>
                                  <option value="KPw Provinsi Jawa Timur">KPw Provinsi Jawa Timur</option>
                                  <option value="KPw Provinsi Sumatera Utara">KPw Provinsi Sumatera Utara</option>
                                  <option value="KPw Provinsi Sulawesi Selatan">KPw Provinsi Sulawesi Selatan</option>
                                  <option value="KPw Provinsi Bali">KPw Provinsi Bali</option>
                                  <option value="KPw Provinsi Kalimantan Selatan">KPw Provinsi Kalimantan Selatan</option>
                                  <option value="KPw Provinsi Jawa Barat">KPw Provinsi Jawa Barat</option>
                                  <option value="KPw Provinsi Jawa Tengah">KPw Provinsi Jawa Tengah</option>
                                  <option value="KPw Provinsi Sumatera Barat">KPw Provinsi Sumatera Barat</option>
                                  <option value="KPw Provinsi Sumatera Selatan">KPw Provinsi Sumatera Selatan</option>
                                  <option value="KPw Provinsi DKI Jakarta">KPw Provinsi DKI Jakarta</option>
                                  <option value="KPw Provinsi Dl Yogyakarta">KPw Provinsi Dl Yogyakarta</option>
                                  <option value="KPw Provinsi Riau">KPw Provinsi Riau</option>
                                  <option value="KPw Provinsi Sulawesi Utara">KPw Provinsi Sulawesi Utara</option>
                                  <option value="KPw Provinsi Lampung">KPw Provinsi Lampung</option>
                                  <option value="KPw Provinsi Banten">KPw Provinsi Banten</option>
                                  <option value="KPw Provinsi Papua">KPw Provinsi Papua</option>
                                  <option value="KPw Provinsi Kepulauan Riau">KPw Provinsi Kepulauan Riau</option>
                                  <option value="KPw Provinsi Aceh">KPw Provinsi Aceh</option>
                                  <option value="KPw Provinsi Nusa Tenggara Barat">KPw Provinsi Nusa Tenggara Barat</option>
                                  <option value="KPw Provinsi Kalimantan Barat">KPw Provinsi Kalimantan Barat</option>
                                  <option value="KPw Provinsi Nusa Tenggara Timur">KPw Provinsi Nusa Tenggara Timur</option>
                                  <option value="KPw Provinsi Kalimantan Tengah">KPw Provinsi Kalimantan Tengah</option>
                                  <option value="KPw Provinsi Jambi">KPw Provinsi Jambi</option>
                                  <option value="KPw Provinsi Maluku">KPw Provinsi Maluku</option>
                                  <option value="KPw Provinsi Sulawesi Tenggara">KPw Provinsi Sulawesi Tenggara</option>
                                  <option value="KPw Provinsi Maluku Utara">KPw Provinsi Maluku Utara</option>
                                  <option value="KPw Provinsi Bengkulu">KPw Provinsi Bengkulu</option>
                                  <option value="KPw Provinsi Gorontalo">KPw Provinsi Gorontalo</option>
                                  <option value="KPw Provinsi Kep. Bangka Belitung">KPw Provinsi Kep. Bangka Belitung</option>
                                  <option value="KPw Provinsi Papua Barat">KPw Provinsi Papua Barat</option>
                                  <option value="KPw Provinsi Sulawesi Barat">KPw Provinsi Sulawesi Barat</option>
                                  <option value="KPw Provinsi Kalimantan Utara">KPw Provinsi Kalimantan Utara</option>
                                  <option value="KPw Provinsi Kalimantan Timur">KPw Provinsi Kalimantan Timur</option>
                                  <option value="KPw Provinsi Sulawesi Tengah">KPw Provinsi Sulawesi Tengah</option>
                                  <option value="KPw Balikpapan">KPw Balikpapan</option>
                                  <option value="KPw Cirebon">KPw Cirebon</option>
                                  <option value="KPw Jember">KPw Jember</option>
                                  <option value="KPw Kediri">KPw Kediri</option>
                                  <option value="KPw Lhokseumawe">KPw Lhokseumawe</option>
                                  <option value="KPw Malang">KPw Malang</option>
                                  <option value="KPw Purwokerto">KPw Purwokerto</option>
                                  <option value="KPw Pematangsiantar">KPw Pematangsiantar</option>
                                  <option value="KPw Sibolga">KPw Sibolga</option>
                                  <option value="KPw solo">KPw solo</option>
                                  <option value="KPw Tasikmalaya">KPw Tasikmalaya</option>
                                  <option value="KPw Tegal">KPw Tegal</option>
                                  <option value="KPw Beijing">KPw Beijing</option>
                                  <option value="KPw Tokyo">KPw Tokyo</option>
                                  <option value="KPw Singapore">KPw Singapore</option>
                                  <option value="KPw New York">KPw New York</option>
                                  <option value="KPw London">KPw London</option>
                                  <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="no_hp" class="form-label">Nomor Handphone</label>
                                <input id="no_hp" name="no_hp" value="<?= $data_user['no_hp'] ?>" type="text" class="form-control" placeholder="Masukkan No. HP (WhatsApp)" required>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input id="tgl_lahir" name="tgl_lahir" value="<?= $data_user['tgl_lahir'] ? $data_user['tgl_lahir'] : '' ?>" type="date" class="form-control" required>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="tgl_diangkat_pegawai" class="form-label">Tanggal Diangkat Pegawai</label>
                                <input id="tgl_diangkat_pegawai" name="tgl_diangkat_pegawai" value="<?= $data_user['tgl_diangkat_pegawai'] ? $data_user['tgl_diangkat_pegawai'] : '' ?>" type="date" class="form-control" required>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="usia_diangkat_tahun" class="form-label">Usia Diangkat (Tahun)</label>
                                <input id="usia_diangkat_tahun" name="usia_diangkat_tahun" value="<?= $data_user['usia_diangkat_tahun'] ? $data_user['usia_diangkat_tahun'] : '' ?>" type="number" class="form-control" required>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="usia_diangkat_bulan" class="form-label">Usia Diangkat (Bulan)</label>
                                <input id="usia_diangkat_bulan" name="usia_diangkat_bulan" value="<?= $data_user['usia_diangkat_bulan'] ? $data_user['usia_diangkat_bulan'] : '' ?>" type="number" class="form-control" required>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="usia_pensiun" class="form-label">Usia Pensiun</label>
                                <input id="usia_pensiun" name="usia_pensiun" value="<?= $data_user['usia_pensiun'] ? $data_user['usia_pensiun'] : '' ?>" type="number" class="form-control" required>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="tgl_registrasi" class="form-label">Tanggal Registrasi</label>
                                <input id="tgl_registrasi" name="tgl_registrasi" value="<?= $data_user['tgl_registrasi'] ? $data_user['tgl_registrasi'] : '' ?>" type="date" class="form-control" required readonly>
                            </div>
                          </div>
                          <hr>
                          <div class="grid grid-cols-12 gap-6 p-5">
                            <div class="col-span-12 lg:col-span-4">
                              <label for="gaji" class="form-label">Gaji</label>
                              <input id="gaji" name="gaji" value="<?= $this->session->userdata('pension_fund_tracker_data_temp') ? $this->session->userdata('pension_fund_tracker_data_temp')['gaji'] : '' ?>" type="number" class="form-control" required>
                                <div class="form-help">Nilai gaji anda tidak akan disimpan kedalam database kami untuk mendukung privasi pengguna.</div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                              <label for="phdp" class="form-label">PhDP</label>
                              <input id="phdp" name="phdp" value="<?= $this->session->userdata('pension_fund_tracker_data_temp') ? $this->session->userdata('pension_fund_tracker_data_temp')['phdp'] : '' ?>" type="number" class="form-control" required>
                                <div class="form-help">Nilai PhDP anda tidak akan disimpan kedalam database kami untuk mendukung privasi pengguna.</div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                              <label for="saldo_ppip" class="form-label">Saldo PPIP</label>
                              <input id="saldo_ppip" name="saldo_ppip" value="<?= $data_user['saldo_ppip'] ? $data_user['saldo_ppip'] : '' ?>" type="number" class="form-control" required>
                            </div>
                          </div>
                          <hr>
                          <div class="grid grid-cols-12 gap-6 p-5">
                            <div class="col-span-12">
                              <div class="mb-2">
                                <label class="form-label">Layer Personal</label>
                                <div class="flex flex-col sm:flex-row mb-2">
                                  <div class="form-check mr-2">
                                    <label class="form-check-label" for="layer_personal_ya">
                                    <input id="layer_personal_ya" class="form-check-input" type="radio" name="layer_personal" value="1" onclick="showLayerPersonalQuestions()" <?= $data_user['layer_personal'] ? 'checked' : '' ?> required>
                                    Ya</label>
                                  </div>
                                  <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <label class="form-check-label" for="layer_personal_tidak" >
                                    <input id="layer_personal_tidak" class="form-check-input" type="radio" name="layer_personal" value="0" onclick="hideLayerPersonalQuestions()" <?= !$data_user['layer_personal'] ? 'checked' : '' ?> required>
                                    Tidak</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="layer_personal_questions" class="col-span-12" style="<?= $data_user['layer_personal'] ? 'display:block' : 'display:none' ?>">
                              <div class="grid grid-cols-3 gap-6">
                                <div class="mb-2">
                                    <label for="terdapat_investasi_pensiun" class="form-label">Apakah sudah terdapat investasi yang disiapkan untuk pensiun ?</label>
                                    <div class="flex flex-col sm:flex-row">
                                    <div class="form-check mr-2">
                                      <input id="terdapat_investasi_pensiun_ya" class="form-check-input" type="radio" name="terdapat_investasi_pensiun" value="1" <?= $data_user['terdapat_investasi_pensiun'] ? 'checked' : '' ?> <?= $data_user['layer_personal'] ? 'required' : '' ?>>
                                      <label class="form-check-label" for="terdapat_investasi_pensiun_ya">Ya</label>
                                    </div>
                                    <div class="form-check mr-2 mt-2 sm:mt-0">
                                      <input id="terdapat_investasi_pensiun_tidak" class="form-check-input" type="radio" name="terdapat_investasi_pensiun" value="0" <?= !$data_user['terdapat_investasi_pensiun'] ? 'checked' : '' ?> <?= $data_user['layer_personal'] ? 'required' : '' ?>>
                                      <label class="form-check-label" for="terdapat_investasi_pensiun_tidak">Tidak</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-2">
                                    <label for="jumlah_investasi_keuangan" class="form-label">Jumlah Investasi Pasar Keuangan</label>
                                    <input id="jumlah_investasi_keuangan" name="jumlah_investasi_keuangan" value="<?= $data_user['jumlah_investasi_keuangan'] ? $data_user['jumlah_investasi_keuangan'] : '' ?>" type="number" class="form-control" <?= $data_user['layer_personal'] ? 'required' : '' ?>>
                                </div>
                                <div class="mb-2">
                                    <label for="jumlah_investasi_properti" class="form-label">Jumlah Investasi Properti (properti yang mendapatkan cashflow secara rutin)</label>
                                    <input id="jumlah_investasi_properti" name="jumlah_investasi_properti" value="<?= $data_user['jumlah_investasi_properti'] ? $data_user['jumlah_investasi_properti'] : '' ?>" type="number" class="form-control" <?= $data_user['layer_personal'] ? 'required' : '' ?>>
                                </div>
                                <div class="mb-2">
                                    <label for="sewa_properti" class="form-label">Hasil neto sewa per tahun (telah dipotong biaya pengelolaan, biaya perawatan)</label>
                                    <input id="sewa_properti" type="number" name="sewa_properti" value="<?= $data_user['sewa_properti'] ? $data_user['sewa_properti'] : '' ?>" class="form-control" <?= $data_user['layer_personal'] ? 'required' : '' ?>>
                                </div>
                                <div class="mb-2">
                                    <label for="kenaikan_properti" class="form-label">Rata-rata kenaikan harga properti per tahun (%)</label>
                                    <input id="kenaikan_properti" name="kenaikan_properti" value="<?= $data_user['kenaikan_properti'] ? round($data_user['kenaikan_properti'], 2) : '' ?>" type="number" step="any" class="form-control" <?= $data_user['layer_personal'] ? 'required' : '' ?>>
                                </div>
                                <div class="mb-2">
                                    <label for="kenaikan_sewa" class="form-label">Rata-rata kenaikan sewa properti per tahun (%)</label>
                                    <input id="kenaikan_sewa" name="kenaikan_sewa" value="<?= $data_user['kenaikan_sewa'] ? round($data_user['kenaikan_sewa'],2) : '' ?>" type="number" step="any" class="form-control" <?= $data_user['layer_personal'] ? 'required' : '' ?>>
                                </div>
                              </div>
                            </div>
                          </div>
                          <script>
                            function showLayerPersonalQuestions() {
                              var layer_personal_questions = document.getElementById("layer_personal_questions");
                              if (document.querySelector('input[name="layer_personal"]:checked').value == 1) {
                                layer_personal_questions.style.display = "block";
                                // required true
                                document.querySelector('input[name="terdapat_investasi_pensiun"]').required = true;
                                document.querySelector('input[name="jumlah_investasi_keuangan"]').required = true;
                                document.querySelector('input[name="jumlah_investasi_properti"]').required = true;
                                document.querySelector('input[name="sewa_properti"]').required = true;
                                document.querySelector('input[name="kenaikan_properti"]').required = true;
                                document.querySelector('input[name="kenaikan_sewa"]').required = true;
                              } else {
                                layer_personal_questions.style.display = "none";
                                // required false
                                document.querySelector('input[name="terdapat_investasi_pensiun"]').required = false;
                                document.querySelector('input[name="jumlah_investasi_keuangan"]').required = false;
                                document.querySelector('input[name="jumlah_investasi_properti"]').required = false;
                                document.querySelector('input[name="sewa_properti"]').required = false;
                                document.querySelector('input[name="kenaikan_properti"]').required = false;
                                document.querySelector('input[name="kenaikan_sewa"]').required = false;
                              }
                            }
                            function hideLayerPersonalQuestions() {
                              var tampilan = document.getElementById("layer_personal_questions");
                              tampilan.style.display = "none";
                                // required false
                                document.querySelector('input[name="terdapat_investasi_pensiun"]').required = false;
                                document.querySelector('input[name="jumlah_investasi_keuangan"]').required = false;
                                document.querySelector('input[name="jumlah_investasi_properti"]').required = false;
                                document.querySelector('input[name="sewa_properti"]').required = false;
                                document.querySelector('input[name="kenaikan_properti"]').required = false;
                                document.querySelector('input[name="kenaikan_sewa"]').required = false;
                            }
                          </script>
                          <hr>
                          <div class="grid grid-cols-12 gap-6 p-5">
                            <div class="col-span-12">
                              <label class="form-label">Rencana penambahan Saldo pada bulan ini ?</label>
                              <div class="flex flex-col sm:flex-row mb-5">
                                <div class="form-check mr-2">
                                  <label class="form-check-label" for="rencana_penambahan_saldo_ya">
                                  <input id="rencana_penambahan_saldo_ya" class="form-check-input" type="radio" name="rencana_penambahan_saldo_bulan_ini" value="1" onclick="showRencanaPenambahanSaldoQuestions()" <?= $data_user['rencana_penambahan_saldo_bulan_ini'] ? 'checked' : '' ?> required>
                                  Ya</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                  <label class="form-check-label" for="rencana_penambahan_saldo_tidak">
                                  <input id="rencana_penambahan_saldo_tidak" class="form-check-input" type="radio" name="rencana_penambahan_saldo_bulan_ini" value="0" onclick="hideRencanaPenambahanSaldoQuestions()" <?= !$data_user['rencana_penambahan_saldo_bulan_ini'] ? 'checked' : '' ?> required>
                                  Tidak</label>
                                </div>
                              </div>
                            </div>
                            <div id="rencana_penambahan_saldo" class="col-span-12" style="<?= $data_user['rencana_penambahan_saldo_bulan_ini'] ? 'display:block' : 'display:none' ?>">
                              <div class="grid grid-cols-2 gap-6">
                                <div class="mb-2">
                                    <label for="penambahan_saldo_tentative_personal_keuangan" class="form-label">Penambahan Saldo Tentative - Personal Keuangan</label>
                                    <input id="penambahan_saldo_tentative_personal_keuangan" value="<?= $data_user['penambahan_saldo_tentative_personal_keuangan'] ? $data_user['penambahan_saldo_tentative_personal_keuangan'] : '' ?>" name="penambahan_saldo_tentative_personal_keuangan" type="number" class="form-control" <?= $data_user['rencana_penambahan_saldo_bulan_ini'] ? 'required' : '' ?>>
                                </div>
                                <div class="mb-2">
                                    <label for="penambahan_saldo_tentative_personal_properti" class="form-label">Penambahan Saldo Tentative - Personal Properti</label>
                                    <input id="penambahan_saldo_tentative_personal_properti" value="<?= $data_user['penambahan_saldo_tentative_personal_properti'] ? $data_user['penambahan_saldo_tentative_personal_properti'] : '' ?>" name="penambahan_saldo_tentative_personal_properti" type="number" class="form-control" <?= $data_user['rencana_penambahan_saldo_bulan_ini'] ? 'required' : '' ?>>
                                </div>
                              </div>
                            </div>
                            <script>
                              function showRencanaPenambahanSaldoQuestions() {
                                var layer_personal_questions = document.getElementById("rencana_penambahan_saldo");
                                if (document.querySelector('input[name="rencana_penambahan_saldo_bulan_ini"]:checked').value == 1) {
                                  layer_personal_questions.style.display = "block";
                                  // required true
                                  document.querySelector('input[name="penambahan_saldo_tentative_personal_keuangan"]').required = true;
                                  document.querySelector('input[name="penambahan_saldo_tentative_personal_properti"]').required = true;
                                } else {
                                  layer_personal_questions.style.display = "none";
                                  // required false
                                  document.querySelector('input[name="penambahan_saldo_tentative_personal_keuangan"]').required = false;
                                  document.querySelector('input[name="penambahan_saldo_tentative_personal_properti"]').required = false;
                                }
                              }
                              function hideRencanaPenambahanSaldoQuestions() {
                                var tampilan = document.getElementById("rencana_penambahan_saldo");
                                tampilan.style.display = "none";
                                // required false
                                document.querySelector('input[name="penambahan_saldo_tentative_personal_keuangan"]').required = false;
                                document.querySelector('input[name="penambahan_saldo_tentative_personal_properti"]').required = false;
                              }
                            </script>
                            <div class="col-span-12 mb-2 text-right">
                              <button type="submit" class="btn btn-success">Update & Simpan</button>
                            </div>
                          </div>
                        </form>
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
          confirmButtonText: "Submit & Update Profil Saya",
          cancelButtonText: "Kembali",
      }).then((result) => {
          if (result.isConfirmed) {  
            form.submit();
          }
      });
  });
</script>