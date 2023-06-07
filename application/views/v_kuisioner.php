
<div class="wrapper wrapper--top-nav">
    <div class="wrapper-box">
      <div class="content">
        <form id="myForm" action="<?= base_url("input-kuisioner") ?>" method="post">
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
                          <input id="bekerja_konsumsi" type="number" step="any" name="bekerja_konsumsi" class="form-control" value="<?= $answer["KONSUMSI"]["BEKERJA_KONSUMSI"] ? round($answer["KONSUMSI"]["BEKERJA_KONSUMSI"],2) : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_konsumsi" type="number" step="any" name="pensiun_konsumsi" class="form-control" value="<?= $answer["KONSUMSI"]["PENSIUN_KONSUMSI"] ? round($answer["KONSUMSI"]["PENSIUN_KONSUMSI"],2) : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Utilities (Listrik, Air PAM, Gas, Iuran Lingkungan, Iuran Keamanan, Iuran Kebersihan, Internet, Pulsa)</td>
                        <td>
                          <input id="bekerja_utilities" type="number" step="any" name="bekerja_utilities" class="form-control" value="<?= $answer["UTILITIES"]["BEKERJA_UTILITIES"] ? round($answer["UTILITIES"]["BEKERJA_UTILITIES"],2) : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_utilities" type="number" step="any" name="pensiun_utilities" class="form-control" value="<?= $answer["UTILITIES"]["PENSIUN_UTILITIES"] ? round($answer["UTILITIES"]["PENSIUN_UTILITIES"],2) : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Transportasi (Bahan Bakar, Pajak Kendaraan, Servis, Transport online)</td>
                        <td>
                          <input id="bekerja_transportasi" type="number" step="any" name="bekerja_transportasi" class="form-control" value="<?= $answer["TRANSPORTASI"]["BEKERJA_TRANSPORTASI"] ? round($answer["TRANSPORTASI"]["BEKERJA_TRANSPORTASI"],2) : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_transportasi" type="number" step="any" name="pensiun_transportasi" class="form-control" value="<?= $answer["TRANSPORTASI"]["PENSIUN_TRANSPORTASI"] ? round($answer["TRANSPORTASI"]["PENSIUN_TRANSPORTASI"],2) : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Cicilan Pinjaman (Pinjaman kantor, pinjaman kartu kredit)</td>
                        <td>
                          <input id="bekerja_cicilan" type="number" step="any" name="bekerja_cicilan" class="form-control" value="<?= $answer["CICILAN"]["BEKERJA_CICILAN"] ? round($answer["CICILAN"]["BEKERJA_CICILAN"],2) : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_cicilan" type="number" step="any" name="pensiun_cicilan" class="form-control" value="<?= $answer["CICILAN"]["PENSIUN_CICILAN"] ? round($answer["CICILAN"]["PENSIUN_CICILAN"],2) : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Ibadah (zakat, sedekah, perpuluhan)</td>
                        <td>
                          <input id="bekerja_ibadah" type="number" step="any" name="bekerja_ibadah" class="form-control" value="<?= $answer["IBADAH"]["BEKERJA_IBADAH"] ? round($answer["IBADAH"]["BEKERJA_IBADAH"],2) : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_ibadah" type="number" step="any" name="pensiun_ibadah" class="form-control" value="<?= $answer["IBADAH"]["PENSIUN_IBADAH"] ? round($answer["IBADAH"]["PENSIUN_IBADAH"],2) : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Pendidikan</td>
                        <td>
                          <input id="bekerja_pendidikan" type="number" step="any" name="bekerja_pendidikan" class="form-control" value="<?= $answer["PENDIDIKAN"]["BEKERJA_PENDIDIKAN"] ? round($answer["PENDIDIKAN"]["BEKERJA_PENDIDIKAN"],2) : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_pendidikan" type="number" step="any" name="pensiun_pendidikan" class="form-control" value="<?= $answer["PENDIDIKAN"]["PENSIUN_PENDIDIKAN"] ? round($answer["PENDIDIKAN"]["PENSIUN_PENDIDIKAN"],2) : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Kesehatan</td>
                        <td>
                          <input id="bekerja_kesehatan" type="number" step="any" name="bekerja_kesehatan" class="form-control" value="<?= $answer["KESEHATAN"]["BEKERJA_KESEHATAN"] ? round($answer["KESEHATAN"]["BEKERJA_KESEHATAN"],2) : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_kesehatan" type="number" step="any" name="pensiun_kesehatan" class="form-control" value="<?= $answer["KESEHATAN"]["PENSIUN_KESEHATAN"] ? round($answer["KESEHATAN"]["PENSIUN_KESEHATAN"],2) : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Hiburan (Traveling, Netflix)</td>
                        <td>
                          <input id="bekerja_hiburan" type="number" step="any" name="bekerja_hiburan" class="form-control" value="<?= $answer["HIBURAN"]["BEKERJA_HIBURAN"] ? round($answer["HIBURAN"]["BEKERJA_HIBURAN"],2) : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_hiburan" type="number" step="any" name="pensiun_hiburan" class="form-control" value="<?= $answer["HIBURAN"]["PENSIUN_HIBURAN"] ? round($answer["HIBURAN"]["PENSIUN_HIBURAN"],2) : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Investasi</td>
                        <td>
                          <input id="bekerja_investasi" type="number" step="any" name="bekerja_investasi" class="form-control" value="<?= $answer["INVESTASI"]["BEKERJA_INVESTASI"] ? round($answer["INVESTASI"]["BEKERJA_INVESTASI"],2) : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_investasi" type="number" step="any" name="pensiun_investasi" class="form-control" value="<?= $answer["INVESTASI"]["PENSIUN_INVESTASI"] ? round($answer["INVESTASI"]["PENSIUN_INVESTASI"],2) : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Lain-lain (Pajak Kendaraan, perlengkapan rumah)</td>
                        <td>
                          <input id="bekerja_lain" type="number" step="any" name="bekerja_lain" class="form-control" value="<?= $answer["LAIN"]["BEKERJA_LAIN"] ? round($answer["LAIN"]["BEKERJA_LAIN"],2) : 0 ?>" required onchange="totalPengeluaranBekerja()">
                        </td>
                        <td>
                          <input id="pensiun_lain" type="number" step="any" name="pensiun_lain" class="form-control" value="<?= $answer["LAIN"]["PENSIUN_LAIN"] ? round($answer["LAIN"]["PENSIUN_LAIN"],2) : 0 ?>" required onchange="totalPengeluaranPensiun()">
                        </td>
                      </tr>
                      <tr>
                        <td>Total Pengeluaran</td>
                        <td>
                          <input id="bekerja_total_pengeluaran" name="bekerja_total_pengeluaran" type="number" step="any" class="form-control" value="<?= $answer["BEKERJA_TOTAL_PENGELUARAN"] ? round($answer["BEKERJA_TOTAL_PENGELUARAN"],2) : 0 ?>" readonly>
                        </td>
                        <td>
                          <input id="pensiun_total_pengeluaran" name="pensiun_total_pengeluaran" type="number" step="any" class="form-control" value="<?= $answer["PENSIUN_TOTAL_PENGELUARAN"] ? round($answer["PENSIUN_TOTAL_PENGELUARAN"],2) : 0 ?>" readonly>
                        </td>
                      </tr>
                      <tr>
                        <td>Free Cashflow</td>
                        <td>
                          <input id="free_cashflow" name="free_cashflow" type="number" step="any" class="form-control" value="<?= $answer["FREE_CASHFLOW"] ? round($answer["FREE_CASHFLOW"],2) : 0 ?>" readonly>
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
                        <td class="font-semibold" id="targetrr"><?= $answer["TARGET_RR"] ? (round($answer["TARGET_RR"], 2)*100)." %" : "- %" ?></td>
                      </tr>
                      <tr>
                        <td>Penghasilan Setelah Pensiun</td>
                        <td>
                          <input id="penghasilan_setelah_pensiun" type="number" step="any" name="penghasilan_setelah_pensiun" class="form-control" value="<?= $answer["PENSIUN_TOTAL_PENGELUARAN"] ? round($answer["PENSIUN_TOTAL_PENGELUARAN"],2) : 0 ?>" readonly>
                        </td>
                      </tr>
                      <tr>
                        <td>Total Pengeluaran</td>
                        <td>
                          <input id="total_pengeluaran" type="number" step="any" name="total_pengeluaran" class="form-control" value="<?= $answer["BEKERJA_TOTAL_PENGELUARAN"] ? round($answer["BEKERJA_TOTAL_PENGELUARAN"],2) : 0 ?>" readonly>
                        </td>
                      </tr>
                      <tr>
                        <td>Gaji</td>
                        <td>
                          <input id="gaji" type="number" step="any" name="gaji" class="form-control" value="<?= $answer["GAJI"] ? round($answer["GAJI"],2) : 0 ?>" required onchange="totalFreeCashflow()">
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
          confirmButtonText: "Submit & Update Kuisioner",
          cancelButtonText: "Kembali",
      }).then((result) => {
          if (result.isConfirmed) {  
            form.submit();
          }
      });
  });
</script>
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
    let pensiun_total_pengeluaran = parseInt(document.getElementById("pensiun_total_pengeluaran").value);

    let hasil = gaji - bekerja_total_pengeluaran; 

    let hasil_target_rr = pensiun_total_pengeluaran / gaji
    
    document.getElementById("free_cashflow").value = hasil;

    document.getElementById("targetrr").innerText = "%";
  }
</script>