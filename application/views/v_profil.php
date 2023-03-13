
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
                            <a class="flex items-center mt-5 text-primary font-medium" href=""> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Biodata Pengguna </a>
                            <a class="flex items-center mt-5" href=""> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Update Tracking Data </a>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Nilai Asumsi </a>
                            <a class="flex items-center mt-5" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio PPIP </a>
                            <a class="flex items-center mt-5" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio Personal Pasar Keuangan </a>
                            <a class="flex items-center mt-5" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Komposisi Investasi LifeCycle Fund </a>
                            <a class="flex items-center mt-5" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Treatment Pembayaran Setelah Pensiun </a>
                        </div>
                        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center mt-5" href=""> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Ubah Password </a>
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
                        <div class="intro-y box col-span-12 2xl:col-span-6">
                            <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Pengumuman
                                </h2>
                                <button data-carousel="announcement" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                                <button data-carousel="announcement" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button>
                            </div>
                            <div class="tiny-slider py-5" id="announcement">
                                <div class="px-5">
                                    <div class="font-medium text-lg">Ubah Password</div>
                                    <div class="text-slate-600 dark:text-slate-500 mt-2">
                                        Untuk menunjang keamanan pengguna dalam mengakses aplikasi ini, dimohon untuk pengguna melakukan update password secara berkala pada menu <a href="<?= base_url() ?>update-password">Ubah Password</a>.
                                    </div>
                                    <div class="flex items-center mt-5">
                                        <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">1 Maret 2023</div>
                                    </div>
                                </div>
                                <div class="px-5">
                                    <div class="font-medium text-lg">Pelayanan Pengguna</div>
                                    <div class="text-slate-600 dark:text-slate-500 mt-2">
                                        Bagi pengguna yang memiliki pertanyaan dan gangguan dapat menghubungi nomor berikut melalui WhatsApp kami +62918239131132 untuk pelayanan selanjutnya.
                                    </div>
                                    <div class="flex items-center mt-5">
                                        <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">4 Maret 2023</div>
                                    </div>
                                </div>
                                <div class="px-5">
                                    <div class="font-medium text-lg">Pengguna Baru</div>
                                    <div class="text-slate-600 dark:text-slate-500 mt-2">
                                        Harap mengisi semua input yang tersedia pada menu halaman <a href="<?= base_url() ?>kuisioner">Kuisioner</a> dan sub-menu pada halaman profil.
                                    </div>
                                    <div class="flex items-center mt-5">
                                        <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">6 Maret 2023</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Announcement -->
                        <div class="intro-y box col-span-12 2xl:col-span-6 ">
                          <div class="grid grid-cols-12 gap-6 p-5">
                            <div class="col-span-12 lg:col-span-4">
                                <label for="" class="form-label">Nama</label>
                                <input id="" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="" class="form-label">Email</label>
                                <input id="" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="" class="form-label">Nomor Handphone</label>
                                <input id="" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="" class="form-label">Tanggal Lahir</label>
                                <input id="" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="" class="form-label">Tanggal Pegawai</label>
                                <input id="" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="" class="form-label">Usia Diangkat (Tahun)</label>
                                <input id="" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="" class="form-label">Usia Diangkat (Bulan)</label>
                                <input id="" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="" class="form-label">Usia Pensiun</label>
                                <input id="" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <label for="" class="form-label">Tanggal Registrasi</label>
                                <input id="" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                              <label for="" class="form-label">Gaji</label>
                              <input id="" type="text" class="form-control" placeholder="">
                                <div class="form-help">Nilai gaji anda tidak akan disimpan kedalam database kami untuk mendukung privasi pengguna.</div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                              <label for="" class="form-label">PhDP</label>
                              <input id="" type="text" class="form-control" placeholder="">
                                <div class="form-help">Nilai PhDP anda tidak akan disimpan kedalam database kami untuk mendukung privasi pengguna.</div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                              <label for="" class="form-label">Saldo PPIP</label>
                              <input id="" type="text" class="form-control" placeholder="">
                            </div>
                          </div>
                          <hr>
                          <div class="grid grid-cols-12 gap-6 p-5">
                            <div class="col-span-12 lg:col-span-4">
                              <label class="form-label">Layer PPMP</label>
                              <div class="flex flex-col sm:flex-row mb-2">
                                <div class="form-check mr-2">
                                  <input id="" class="form-check-input" type="radio" name="" value="Ya">
                                  <label class="form-check-label" for="">Ya</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                  <input id="" class="form-check-input" type="radio" name="" value="Ya">
                                  <label class="form-check-label" for="">Tidak</label>
                                </div>
                              </div>
                              <label class="form-label">Layer PPIP</label>
                              <div class="flex flex-col sm:flex-row mb-2">
                                <div class="form-check mr-2">
                                  <input id="" class="form-check-input" type="radio" name="" value="Ya">
                                  <label class="form-check-label" for="">Ya</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                  <input id="" class="form-check-input" type="radio" name="" value="Ya">
                                  <label class="form-check-label" for="">Tidak</label>
                                </div>
                              </div>
                              <label class="form-label">Layer Personal</label>
                              <div class="flex flex-col sm:flex-row mb-2">
                                <div class="form-check mr-2">
                                  <input id="" class="form-check-input" type="radio" name="" value="Ya">
                                  <label class="form-check-label" for="">Ya</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                  <input id="" class="form-check-input" type="radio" name="" value="Ya">
                                  <label class="form-check-label" for="">Tidak</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-span-12 lg:col-span-8">
                              <div class="mb-2">
                                  <label for="" class="form-label">Apakah sudah terdapat investasi yang disiapkan untuk pensiun ?</label>
                                  <div class="flex flex-col sm:flex-row">
                                  <div class="form-check mr-2">
                                    <input id="" class="form-check-input" type="radio" name="" value="Ya">
                                    <label class="form-check-label" for="">Ya</label>
                                  </div>
                                  <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="" class="form-check-input" type="radio" name="" value="Ya">
                                    <label class="form-check-label" for="">Tidak</label>
                                  </div>
                                </div>
                              </div>
                              <div class="mb-2">
                                  <label for="" class="form-label">Jumlah Investasi Pasar Keuangan</label>
                                  <input id="" type="text" class="form-control" placeholder="">
                              </div>
                              <div class="mb-2">
                                  <label for="" class="form-label">Jumlah Investasi Properti (properti yang mendapatkan cashflow secara rutin)</label>
                                  <input id="" type="text" class="form-control" placeholder="">
                              </div>
                              <div class="mb-2">
                                  <label for="" class="form-label">Hasil neto sewa per tahun (telah dipotong biaya pengelolaan, biaya perawatan)</label>
                                  <input id="" type="text" class="form-control" placeholder="">
                              </div>
                              <div class="mb-2">
                                  <label for="" class="form-label">Rata-rata kenaikan harga properti per tahun</label>
                                  <input id="" type="text" class="form-control" placeholder="">
                              </div>
                              <div class="mb-2">
                                  <label for="" class="form-label">Rata-rata kenaikan sewa properti per tahun</label>
                                  <input id="" type="text" class="form-control" placeholder="">
                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="grid grid-cols-12 gap-6 p-5">
                            <div class="col-span-12">
                              <label class="form-label">Rencana penambahan Saldo pada bulan ini ?</label>
                              <div class="flex flex-col sm:flex-row mb-5">
                                <div class="form-check mr-2">
                                  <input id="" class="form-check-input" type="radio" name="" value="Ya">
                                  <label class="form-check-label" for="">Ya</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                  <input id="" class="form-check-input" type="radio" name="" value="Ya">
                                  <label class="form-check-label" for="">Tidak</label>
                                </div>
                              </div>
                              <div class="mb-2">
                                  <label for="" class="form-label">Penambahan Saldo Tentative - Personal Keuangan</label>
                                  <input id="" type="text" class="form-control" placeholder="">
                              </div>
                              <div class="mb-2">
                                  <label for="" class="form-label">Penambahan Saldo Tentative - Personal Properti</label>
                                  <input id="" type="text" class="form-control" placeholder="">
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>
</div>