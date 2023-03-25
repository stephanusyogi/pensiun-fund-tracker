
<div class="wrapper wrapper--top-nav">
    <div class="wrapper-box">
      <div class="content">
        <div class="-intro-x overflow-x-auto mt-5 p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="p-5 col-span-12 lg:col-span-6">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th class="whitespace-nowrap">#</th>
                          <th class="whitespace-nowrap">Nilai</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Gaji</td>
                      <td><?= $answer["GAJI"] ? $answer["GAJI"] : "-" ?></td>
                    </tr>
                    <tr>
                      <td>Penghasilan Setelah Pensiun</td>
                      <td><?= $answer["PENSIUN_TOTAL_PENGELUARAN"] ? $answer["PENSIUN_TOTAL_PENGELUARAN"] : "-" ?></td>
                    </tr>
                    <tr>
                      <td>Target Replacement Ratio</td>
                      <td><?= $answer["TARGET_RR"] ? $answer["TARGET_RR"] : "-" ?></td>
                    </tr>
                    <tr>
                      <td>Total Pengeluaran</td>
                      <td><?= $answer["BEKERJA_TOTAL_PENGELUARAN"] ? $answer["BEKERJA_TOTAL_PENGELUARAN"] : "-" ?></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <p>Keterangan:</p>
                        <p><strong>Gaji</strong> bukan merupakan Take Home Pay. Jumlah sebagaimana pada slip gaji.</p>
                        <p><strong>Total Pengeluaran</strong> dapat melebihi dari gaji dengan mempertimbangkan Take Home Pay ≥ Gaji.</p>
                        <p><strong>Penghasilan Setelah Pensiun</strong> yang akan diterima secara bulanan.</p>
                        <p><strong>Target Replacement Ratio</strong> adjusted terhadap gaji.</p>
                      </td>
                    </tr>
                  </tbody>
              </table>
            </div>
            <div class="p-5 col-span-12 lg:col-span-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Alokasi Pengeluaran</th>
                        <th class="whitespace-nowrap">Saat Bekerja</th>
                        <th class="whitespace-nowrap">Rencana Saat Pensiun</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Konsumsi habis pakai (Makanan, minuman, perlengkapan mandi dan cuci)</td>
                    <td><?= $answer["KONSUMSI"]["BEKERJA_KONSUMSI"] ? $answer["KONSUMSI"]["BEKERJA_KONSUMSI"] : "-" ?></td>
                    <td><?= $answer["KONSUMSI"]["PENSIUN_KONSUMSI"] ? $answer["KONSUMSI"]["PENSIUN_KONSUMSI"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Utilities (Listrik, Air PAM, Gas, Iuran Lingkungan, Iuran Keamanan, Iuran Kebersihan, Internet, Pulsa)</td>
                    <td><?= $answer["UTILITIES"]["BEKERJA_UTILITIES"] ? $answer["UTILITIES"]["BEKERJA_UTILITIES"] : "-" ?></td>
                    <td><?= $answer["UTILITIES"]["PENSIUN_UTILITIES"] ? $answer["UTILITIES"]["PENSIUN_UTILITIES"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Transportasi (Bahan Bakar, Pajak Kendaraan, Servis, Transport online)</td>
                    <td><?= $answer["TRANSPORTASI"]["BEKERJA_TRANSPORTASI"] ? $answer["TRANSPORTASI"]["BEKERJA_TRANSPORTASI"] : "-" ?></td>
                    <td><?= $answer["TRANSPORTASI"]["PENSIUN_TRANSPORTASI"] ? $answer["TRANSPORTASI"]["PENSIUN_TRANSPORTASI"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Cicilan Pinjaman (Pinjaman kantor, pinjaman kartu kredit)</td>
                    <td><?= $answer["CICILAN"]["BEKERJA_CICILAN"] ? $answer["CICILAN"]["BEKERJA_CICILAN"] : "-" ?></td>
                    <td><?= $answer["CICILAN"]["PENSIUN_CICILAN"] ? $answer["CICILAN"]["PENSIUN_CICILAN"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Ibadah (zakat, sedekah, perpuluhan)</td>
                    <td><?= $answer["IBADAH"]["BEKERJA_IBADAH"] ? $answer["IBADAH"]["BEKERJA_IBADAH"] : "-" ?></td>
                    <td><?= $answer["IBADAH"]["PENSIUN_IBADAH"] ? $answer["IBADAH"]["PENSIUN_IBADAH"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Pendidikan</td>
                    <td><?= $answer["PENDIDIKAN"]["BEKERJA_PENDIDIKAN"] ? $answer["PENDIDIKAN"]["BEKERJA_PENDIDIKAN"] : "-" ?></td>
                    <td><?= $answer["PENDIDIKAN"]["PENSIUN_PENDIDIKAN"] ? $answer["PENDIDIKAN"]["PENSIUN_PENDIDIKAN"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Kesehatan</td>
                    <td><?= $answer["KESEHATAN"]["BEKERJA_KESEHATAN"] ? $answer["KESEHATAN"]["BEKERJA_KESEHATAN"] : "-" ?></td>
                    <td><?= $answer["KESEHATAN"]["PENSIUN_KESEHATAN"] ? $answer["KESEHATAN"]["PENSIUN_KESEHATAN"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Hiburan (Traveling, Netflix)</td>
                    <td><?= $answer["HIBURAN"]["BEKERJA_HIBURAN"] ? $answer["HIBURAN"]["BEKERJA_HIBURAN"] : "-" ?></td>
                    <td><?= $answer["HIBURAN"]["PENSIUN_HIBURAN"] ? $answer["HIBURAN"]["PENSIUN_HIBURAN"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Investasi</td>
                    <td><?= $answer["INVESTASI"]["BEKERJA_INVESTASI"] ? $answer["INVESTASI"]["BEKERJA_INVESTASI"] : "-" ?></td>
                    <td><?= $answer["INVESTASI"]["PENSIUN_INVESTASI"] ? $answer["INVESTASI"]["PENSIUN_INVESTASI"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Lain-lain (Pajak Kendaraan, perlengkapan rumah)</td>
                    <td><?= $answer["LAIN"]["BEKERJA_LAIN"] ? $answer["LAIN"]["BEKERJA_LAIN"] : "-" ?></td>
                    <td><?= $answer["LAIN"]["PENSIUN_LAIN"] ? $answer["LAIN"]["PENSIUN_LAIN"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Total Pengeluaran</td>
                    <td><?= $answer["BEKERJA_TOTAL_PENGELUARAN"] ? $answer["BEKERJA_TOTAL_PENGELUARAN"] : "-" ?></td>
                    <td><?= $answer["PENSIUN_TOTAL_PENGELUARAN"] ? $answer["BEKERJA_TOTAL_PENGELUARAN"] : "-" ?></td>
                  </tr>
                  <tr>
                    <td>Free Cashflow</td>
                    <td><?= $answer["FREE_CASHFLOW"] ? $answer["FREE_CASHFLOW"] : "-" ?></td>
                  </tr>
                </tbody>
            </table>
            </div>
          </div>
        </div>
        <form action="<?= base_url("input-kuisioner") ?>" method="post">
          <div class="intro-y mt-10 py-5 flex items-center justify-between h-10">
              <h2 class="text-xl font-semibold">
                  Silahkan mengisi beberapa kuisioner dibawah ini.
              </h2>
              <button type="submit" class="ml-auto btn btn-primary py-3 px-4 align-top">Submit & Update Kuisioner Saya</button>
          </div>
          <div class="py-5 grid grid-cols-12 gap-6">
            <?php 
            foreach ($pertanyaan["data"] as $key) { ?>
              <div class="-intro-x p-5 col-span-12 lg:col-span-4 border">
                <p class="text-lg font-medium mb-2 text-center"><?= $key['kuisioner'] ?></p>
                <div class="grid grid-cols-4 mb-2">
                  <div class="col-span-2 flex items-center">
                    <label for="" >Rencana Saat Bekerja:</label>
                  </div>
                  <div class="col-span-2">
                    <input id="" type="number" name="<?= "bekerja_".strtolower(explode('_', $key['kode_kuisioner'])[1]) ?>" class="form-control " required>
                  </div>
                </div>
                <div class="grid grid-cols-4 mb-2">
                  <div class="col-span-2 flex items-center">
                    <label for="" >Rencana Saat Pensiun:</label>
                  </div>
                  <div class="col-span-2">
                    <input id="" type="number" name="<?= "pensiun_".strtolower(explode('_', $key['kode_kuisioner'])[1]) ?>" class="form-control " required>
                  </div>
                </div>
              </div>
            <?php } ?>
              <div class="-intro-x p-5 col-span-12 lg:col-span-4 border">
                <p class="text-lg font-medium mb-2 text-center">Gaji</p>
                <div class="grid grid-cols-4 mb-2">
                  <div class="col-span-2 flex items-center">
                    <label for="" >Gaji:</label>
                  </div>
                  <div class="col-span-2">
                    <input id="" type="number" name="gaji" class="form-control " required>
                  </div>
                </div>
              </div>
          </div>
        </form>
      </div>
    </div>
</div>