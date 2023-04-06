
<div class="wrapper wrapper--top-nav">
    <div class="wrapper-box">
      <div class="content">
        <form action="<?= base_url("input-kuisioner") ?>" method="post">
          <div class="intro-y mt-10 py-5 flex items-center justify-between h-10">
              <h2 class="text-xl font-semibold">
                  Silahkan mengisi beberapa kuisioner dibawah ini.
              </h2>
              <button type="submit" class="ml-auto btn btn-primary py-3 px-4 align-top">Submit & Update Kuisioner Saya</button>
          </div>
          <div class="-intro-x overflow-x-auto mt-5">
            <div class="grid grid-cols-12 gap-6">
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
                        <td>
                          <input id="bekerja_konsumsi" type="number" name="bekerja_konsumsi" class="form-control" value="<?= $answer["KONSUMSI"]["BEKERJA_KONSUMSI"] ? $answer["KONSUMSI"]["BEKERJA_KONSUMSI"] : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_konsumsi" type="number" name="pensiun_konsumsi" class="form-control" value="<?= $answer["KONSUMSI"]["PENSIUN_KONSUMSI"] ? $answer["KONSUMSI"]["PENSIUN_KONSUMSI"] : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Utilities (Listrik, Air PAM, Gas, Iuran Lingkungan, Iuran Keamanan, Iuran Kebersihan, Internet, Pulsa)</td>
                        <td>
                          <input id="bekerja_utilities" type="number" name="bekerja_utilities" class="form-control" value="<?= $answer["UTILITIES"]["BEKERJA_UTILITIES"] ? $answer["UTILITIES"]["BEKERJA_UTILITIES"] : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_utilities" type="number" name="pensiun_utilities" class="form-control" value="<?= $answer["UTILITIES"]["PENSIUN_UTILITIES"] ? $answer["UTILITIES"]["PENSIUN_UTILITIES"] : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Transportasi (Bahan Bakar, Pajak Kendaraan, Servis, Transport online)</td>
                        <td>
                          <input id="bekerja_transportasi" type="number" name="bekerja_transportasi" class="form-control" value="<?= $answer["TRANSPORTASI"]["BEKERJA_TRANSPORTASI"] ? $answer["TRANSPORTASI"]["BEKERJA_TRANSPORTASI"] : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_transportasi" type="number" name="pensiun_transportasi" class="form-control" value="<?= $answer["TRANSPORTASI"]["PENSIUN_TRANSPORTASI"] ? $answer["TRANSPORTASI"]["PENSIUN_TRANSPORTASI"] : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Cicilan Pinjaman (Pinjaman kantor, pinjaman kartu kredit)</td>
                        <td>
                          <input id="bekerja_cicilan" type="number" name="bekerja_cicilan" class="form-control" value="<?= $answer["CICILAN"]["BEKERJA_CICILAN"] ? $answer["CICILAN"]["BEKERJA_CICILAN"] : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_cicilan" type="number" name="pensiun_cicilan" class="form-control" value="<?= $answer["CICILAN"]["PENSIUN_CICILAN"] ? $answer["CICILAN"]["PENSIUN_CICILAN"] : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Ibadah (zakat, sedekah, perpuluhan)</td>
                        <td>
                          <input id="bekerja_ibadah" type="number" name="bekerja_ibadah" class="form-control" value="<?= $answer["IBADAH"]["BEKERJA_IBADAH"] ? $answer["IBADAH"]["BEKERJA_IBADAH"] : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_ibadah" type="number" name="pensiun_ibadah" class="form-control" value="<?= $answer["IBADAH"]["PENSIUN_IBADAH"] ? $answer["IBADAH"]["PENSIUN_IBADAH"] : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Pendidikan</td>
                        <td>
                          <input id="bekerja_pendidikan" type="number" name="bekerja_pendidikan" class="form-control" value="<?= $answer["PENDIDIKAN"]["BEKERJA_PENDIDIKAN"] ? $answer["PENDIDIKAN"]["BEKERJA_PENDIDIKAN"] : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_pendidikan" type="number" name="pensiun_pendidikan" class="form-control" value="<?= $answer["PENDIDIKAN"]["PENSIUN_PENDIDIKAN"] ? $answer["PENDIDIKAN"]["PENSIUN_PENDIDIKAN"] : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Kesehatan</td>
                        <td>
                          <input id="bekerja_kesehatan" type="number" name="bekerja_kesehatan" class="form-control" value="<?= $answer["KESEHATAN"]["BEKERJA_KESEHATAN"] ? $answer["KESEHATAN"]["BEKERJA_KESEHATAN"] : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_kesehatan" type="number" name="pensiun_kesehatan" class="form-control" value="<?= $answer["KESEHATAN"]["PENSIUN_KESEHATAN"] ? $answer["KESEHATAN"]["PENSIUN_KESEHATAN"] : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Hiburan (Traveling, Netflix)</td>
                        <td>
                          <input id="bekerja_hiburan" type="number" name="bekerja_hiburan" class="form-control" value="<?= $answer["HIBURAN"]["BEKERJA_HIBURAN"] ? $answer["HIBURAN"]["BEKERJA_HIBURAN"] : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_hiburan" type="number" name="pensiun_hiburan" class="form-control" value="<?= $answer["HIBURAN"]["PENSIUN_HIBURAN"] ? $answer["HIBURAN"]["PENSIUN_HIBURAN"] : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Investasi</td>
                        <td>
                          <input id="bekerja_investasi" type="number" name="bekerja_investasi" class="form-control" value="<?= $answer["INVESTASI"]["BEKERJA_INVESTASI"] ? $answer["INVESTASI"]["BEKERJA_INVESTASI"] : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_investasi" type="number" name="pensiun_investasi" class="form-control" value="<?= $answer["INVESTASI"]["PENSIUN_INVESTASI"] ? $answer["INVESTASI"]["PENSIUN_INVESTASI"] : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Lain-lain (Pajak Kendaraan, perlengkapan rumah)</td>
                        <td>
                          <input id="bekerja_lain" type="number" name="bekerja_lain" class="form-control" value="<?= $answer["LAIN"]["BEKERJA_LAIN"] ? $answer["LAIN"]["BEKERJA_LAIN"] : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_lain" type="number" name="pensiun_lain" class="form-control" value="<?= $answer["LAIN"]["PENSIUN_LAIN"] ? $answer["LAIN"]["PENSIUN_LAIN"] : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Total Pengeluaran</td>
                        <td>
                          <input id="bekerja_total_pengeluaran" type="number" class="form-control" value="<?= $answer["BEKERJA_TOTAL_PENGELUARAN"] ? $answer["BEKERJA_TOTAL_PENGELUARAN"] : 0 ?>" readonly>
                        </td>
                        <td>
                          <input id="pensiun_total_pengeluaran" type="number" class="form-control" value="<?= $answer["PENSIUN_TOTAL_PENGELUARAN"] ? $answer["PENSIUN_TOTAL_PENGELUARAN"] : 0 ?>" readonly>
                        </td>
                      </tr>
                      <tr>
                        <td>Free Cashflow</td>
                        <td>
                          <input id="free_cashflow" type="number" class="form-control" value="<?= $answer["FREE_CASHFLOW"] ? $answer["FREE_CASHFLOW"] : 0 ?>" readonly>
                        </td>
                      </tr>
                    </tbody>
                </table>
              </div>
              <div class="col-span-12 lg:col-span-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">#</th>
                            <th class="whitespace-nowrap">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Target Replacement Ratio</td>
                        <td class="font-semibold"><?= $answer["TARGET_RR"] ? $answer["TARGET_RR"]." %" : "- %" ?></td>
                      </tr>
                      <tr>
                        <td>Penghasilan Setelah Pensiun</td>
                        <td>
                          <input id="penghasilan_setelah_pensiun" type="number" class="form-control" value="<?= $answer["PENSIUN_TOTAL_PENGELUARAN"] ? $answer["PENSIUN_TOTAL_PENGELUARAN"] : 0 ?>" readonly>
                        </td>
                      </tr>
                      <tr>
                        <td>Total Pengeluaran</td>
                        <td>
                          <input id="total_pengeluaran" type="number" class="form-control" value="<?= $answer["BEKERJA_TOTAL_PENGELUARAN"] ? $answer["BEKERJA_TOTAL_PENGELUARAN"] : 0 ?>" readonly>
                        </td>
                      </tr>
                      <tr>
                        <td>Gaji</td>
                        <td>
                          <input id="gaji" type="number" name="gaji" class="form-control" value="<?= $answer["GAJI"] ? $answer["GAJI"] : 0 ?>" required onchange="totalFreeCashflow()">
                        </td>
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
            </div>
          </div>
        </form>
      </div>
    </div>
</div>

<script>
  function totalPengeluaranBekerja() {
    let bekerja_konsumsi = parseInt(document.getElementById("bekerja_konsumsi").value);
    let bekerja_utilities = parseInt(document.getElementById("bekerja_utilities").value);
    let bekerja_transportasi = parseInt(document.getElementById("bekerja_transportasi").value);
    let bekerja_cicilan = parseInt(document.getElementById("bekerja_cicilan").value);
    let bekerja_ibadah = parseInt(document.getElementById("bekerja_ibadah").value);
    let bekerja_pendidikan = parseInt(document.getElementById("bekerja_pendidikan").value);
    let bekerja_kesehatan = parseInt(document.getElementById("bekerja_kesehatan").value);
    let bekerja_hiburan = parseInt(document.getElementById("bekerja_hiburan").value);
    let bekerja_investasi = parseInt(document.getElementById("bekerja_investasi").value);
    let bekerja_lain = parseInt(document.getElementById("bekerja_lain").value);
    let hasil = bekerja_konsumsi + bekerja_utilities + bekerja_transportasi + bekerja_cicilan + bekerja_ibadah + bekerja_pendidikan + bekerja_kesehatan + bekerja_hiburan + bekerja_investasi + bekerja_lain; 
    
    document.getElementById("bekerja_total_pengeluaran").value = hasil;
    document.getElementById("total_pengeluaran").value = hasil;
  }
  
  function totalPengeluaranPensiun() {
    let pensiun_konsumsi = parseInt(document.getElementById("pensiun_konsumsi").value);
    let pensiun_utilities = parseInt(document.getElementById("pensiun_utilities").value);
    let pensiun_transportasi = parseInt(document.getElementById("pensiun_transportasi").value);
    let pensiun_cicilan = parseInt(document.getElementById("pensiun_cicilan").value);
    let pensiun_ibadah = parseInt(document.getElementById("pensiun_ibadah").value);
    let pensiun_pendidikan = parseInt(document.getElementById("pensiun_pendidikan").value);
    let pensiun_kesehatan = parseInt(document.getElementById("pensiun_kesehatan").value);
    let pensiun_hiburan = parseInt(document.getElementById("pensiun_hiburan").value);
    let pensiun_investasi = parseInt(document.getElementById("pensiun_investasi").value);
    let pensiun_lain = parseInt(document.getElementById("pensiun_lain").value);
    let hasil = pensiun_konsumsi + pensiun_utilities + pensiun_transportasi + pensiun_cicilan + pensiun_ibadah + pensiun_pendidikan + pensiun_kesehatan + pensiun_hiburan + pensiun_investasi + pensiun_lain; 
    
    document.getElementById("pensiun_total_pengeluaran").value = hasil;
    document.getElementById("penghasilan_setelah_pensiun").value = hasil;
  }
  
  function totalFreeCashflow() {
    let gaji = parseInt(document.getElementById("gaji").value);
    let bekerja_total_pengeluaran = parseInt(document.getElementById("bekerja_total_pengeluaran").value);

    let hasil = gaji - bekerja_total_pengeluaran; 
    
    document.getElementById("free_cashflow").value = hasil;
  }
</script>