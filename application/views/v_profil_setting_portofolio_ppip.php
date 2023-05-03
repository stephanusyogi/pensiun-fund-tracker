
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
                            <a class="flex items-center mt-5 text-primary font-medium" href="<?= base_url() ?>profil/setting-portofolio-ppip/<?= $this->session->userdata('pension_fund_tracker_data')['id'] ?>"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Setting Portofolio PPIP </a>
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
                <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                    <div class="grid grid-cols-12 gap-6">
                        <form id="myForm" class="col-span-12 border-b" action="<?= base_url() ?>setting-portofolio-ppip" method="post">
                            <label for="" class="form-label">Pilih Setting Portofolio PPIP</label>
                            <select id="jenis_investasi" class="form-select form-select-lg mt-2" name="id_portofolio_ppip" aria-label=".form-select-lg example" required>
                                <option value="">Pilih</option>
                                <?php foreach ($opsi_setting_ppip as $key) { ?>
                                    <option value="<?= $key['id'] ?>"><?= $key['nama_portofolio'] ?></option>
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
                                        <th class="whitespace-nowrap">Informasi Portofolio PPIP Terpilih</th>
                                        <th class="whitespace-nowrap" rowspan="2">Investasi</th>
                                        <th class="whitespace-nowrap" rowspan="2">Likuiditas</th>
                                    </tr>
                                    <tr>
                                        <th><?= $data_setting_ppip ? $data_setting_ppip[0]['nama_pilihan'] : '' ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Return Portofolio PPIP</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['return_portofolio_tranche_investasi']."%" : '' ?></td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['return_portofolio_tranche_likuiditas']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Risiko Pasar Portofolio PPIP</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['resiko_portofolio_tranche_investasi']."%" : '' ?></td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['resiko_portofolio_tranche_likuiditas']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Komposisi Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['tranche_investasi_saham']."%" : '' ?></td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['tranche_likuiditas_saham']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['tranche_investasi_pendapatan_tetap']."%" : '' ?></td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['tranche_likuiditas_pendapatan_tetap']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Deposito</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['tranche_investasi_deposito']."%" : '' ?></td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['tranche_likuiditas_deposito']."%" : '' ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Asumsi Return Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['return_saham']."%" : '' ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['return_pendapatan_tetap']."%" : '' ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Deposito</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['return_deposito']."%" : '' ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Asumsi Risiko Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['resiko_saham']."%" : '' ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['resiko_pendapatan_tetap']."%" : '' ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Deposito</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['resiko_deposito']."%" : '' ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Korelasi Antar Aset Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham - Pendapatan Tetap</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['korelasi_saham_pendapatan_tetap']."%" : '' ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham - Deposito</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['korelasi_saham_deposito']."%" : '' ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap - Deposito</td>
                                        <td><?= $data_setting_ppip ? $data_setting_ppip[0]['korelasi_pendapatan_tetap_deposito'] : '' ?></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="overflow-x-auto" id="containerSelected" style="display:none;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">Informasi Portofolio PPIP Terpilih</th>
                                        <th class="whitespace-nowrap" rowspan="2">Investasi</th>
                                        <th class="whitespace-nowrap" rowspan="2">Likuiditas</th>
                                    </tr>
                                    <tr>
                                        <th id="namaPortofolio"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Return Portofolio PPIP</td>
                                        <td id="return_portofolio_tranche_investasi"></td>
                                        <td id="return_portofolio_tranche_likuiditas"></td>
                                    </tr>
                                    <tr>
                                        <td>Risiko Pasar Portofolio PPIP</td>
                                        <td id="resiko_portofolio_tranche_investasi"></td>
                                        <td id="resiko_portofolio_tranche_likuiditas"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Komposisi Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham</td>
                                        <td id="tranche_investasi_saham"></td>
                                        <td id="tranche_likuiditas_saham"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap</td>
                                        <td id="tranche_investasi_pendapatan_tetap"></td>
                                        <td id="tranche_likuiditas_pendapatan_tetap"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Deposito</td>
                                        <td id="tranche_investasi_deposito"></td>
                                        <td id="tranche_likuiditas_deposito"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Asumsi Return Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham</td>
                                        <td id="return_saham"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap</td>
                                        <td id="return_pendapatan_tetap"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Deposito</td>
                                        <td id="return_deposito"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Asumsi Risiko Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham</td>
                                        <td id="resiko_saham"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap</td>
                                        <td id="resiko_pendapatan_tetap"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Deposito</td>
                                        <td id="resiko_deposito"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Korelasi Antar Aset Investasi</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham - Pendapatan Tetap</td>
                                        <td id="korelasi_saham_pendapatan_tetap"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Saham - Deposito</td>
                                        <td id="korelasi_saham_deposito"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:2rem!important;">Pendapatan Tetap - Deposito</td>
                                        <td id="korelasi_pendapatan_tetap_deposito"></td>
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
      const namaPortofolio = document.getElementById("namaPortofolio");
      namaPortofolio.textContent = data.nama_portofolio;

      // Nilai Variabel
      const nilai = data;
      delete data.id;
      delete data.nama_portofolio;
      delete data.created_at;
      delete data.flag;

      for (var key in nilai) {
        var value = nilai[key];
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
        xhr.open("GET", "<?= base_url() ?>profil/ppip-by-id/"+select.value);
        xhr.send();
    });
</script>