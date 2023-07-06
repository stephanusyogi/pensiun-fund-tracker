<!-- BEGIN: Content -->
<?php 
function formatNumber($value) {
    $formatted = number_format($value, 0, ',', '.');
    return 'Rp '.$formatted.',-';
}
?>
<div class="wrapper wrapper--top-nav">
    <div class="wrapper-box">
    <!-- BEGIN: Content -->
        <div class="content">
            <div class="intro-y mt-5 py-10 flex items-center justify-center h-10" style="justify-content:space-between;">
                <h2 class="text-2xl font-bold">
                    Tracker Analysis Report
                </h2>
                <button id="generateBtn" class="btn btn-primary"><span class="mr-2"><i data-lucide="refresh-ccw"></i></span> Generate Data</button>
            </div>
            <div class="grid grid-cols-12 gap-6">
                <div class="-intro-x col-span-12 border p-5 border-slate-300">
                    <div class="overflow-x-auto">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Target Replacement Ratio</th>
                                    <td><?= $dashboard ? $dashboard['target_rr'] !== null ? (round($dashboard['target_rr'],2)*100)."%" : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <th>Kesimpulan</th>
                                    <td><?= $dashboard ? $dashboard['kesimpulan'] : '' ?></td>
                                </tr>
                                <tr>
                                    <th>Rekomendasi</th>
                                    <td><?= $dashboard ? $dashboard['rekomendasi'] : '' ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="-intro-x col-span-12 border p-5 border-slate-300">
                    <div class="flex items-center h-10">
                        <div>
                            <h2 class="text-lg font-semibold">
                                Estimasi Replacement Ratio(RR)
                            </h2>
                            <p style="font-style:italic;">Jika Pembayaran PPIP & Personal Pasar Keuangan Menggunakan Anuitas</p>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nilai Estimasi</th>
                                    <th>Minimal</th>
                                    <th>Median</th>
                                    <th>Maksimal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Layer PPMP</td>
                                    <td><?= $dashboard ? $dashboard['rr_ppmp'] !== null ? (round($dashboard['rr_ppmp'],2)*100)."%" : '' : '' ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Layer PPIP</td>
                                    <td><?= $dashboard ? $dashboard['rr_ppip_minimal'] !== null ? (round($dashboard['rr_ppip_minimal'],2)*100)."%" : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['rr_ppip_median'] !== null ? (round($dashboard['rr_ppip_median'],2)*100)."%" : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['rr_ppip_maksimal'] !== null ? (round($dashboard['rr_ppip_maksimal'],2)*100)."%" : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <td>Layer Personal-Pasar Keuangan</td>
                                    <td><?= $dashboard ? $dashboard['rr_personal_keuangan_minimal'] !== null ? (round($dashboard['rr_personal_keuangan_minimal'],2)*100)."%" : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['rr_personal_keuangan_median'] !== null ? (round($dashboard['rr_personal_keuangan_median'],2)*100)."%" : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['rr_personal_keuangan_maksimal'] !== null ? (round($dashboard['rr_personal_keuangan_maksimal'],2)*100)."%" : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <td>Layer Personal-Properti</td>
                                    <td><?= $dashboard ? $dashboard['rr_personal_properti'] !== null ? (round($dashboard['rr_personal_properti'],2)*100)."%" : '' : '' ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total RR</td>
                                    <td><?= $dashboard ? $dashboard['rr_total_minimal'] !== null ? (round($dashboard['rr_total_minimal'],2)*100)."%" : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['rr_total_median'] !== null ? (round($dashboard['rr_total_median'],2)*100)."%" : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['rr_total_maksimal'] !== null ? (round($dashboard['rr_total_maksimal'],2)*100)."%" : '' : '' ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="-intro-x col-span-12 border p-5 border-slate-300">
                    <div class="flex items-center h-10">
                        <div>
                            <h2 class="text-lg font-semibold">
                            Estimasi Penghasilan Bulanan Setelah Pensiun
                            </h2>
                            <p style="font-style:italic;">Jika Pembayaran PPIP & Personal Pasar Keuangan Menggunakan Anuitas</p>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nilai Estimasi</th>
                                    <th>Minimal</th>
                                    <th>Median</th>
                                    <th>Maksimal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Layer PPMP</td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_ppmp'] !== null ? formatNumber($dashboard['penghasilan_ppmp']) : '' : '' ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Layer PPIP</td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_ppip_minimal'] !== null ? formatNumber($dashboard['penghasilan_ppip_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_ppip_median'] !== null ? formatNumber($dashboard['penghasilan_ppip_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_ppip_maksimal'] !== null ? formatNumber($dashboard['penghasilan_ppip_maksimal']) : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <td>Layer Personal-Pasar Keuangan</td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_personal_keuangan_minimal'] !== null ? formatNumber($dashboard['penghasilan_personal_keuangan_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_personal_keuangan_median'] !== null ? formatNumber($dashboard['penghasilan_personal_keuangan_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_personal_keuangan_maksimal'] !== null ? formatNumber($dashboard['penghasilan_personal_keuangan_maksimal']) : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <td>Layer Personal-Properti</td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_personal_properti'] !== null ? formatNumber($dashboard['penghasilan_personal_properti']) : '' : '' ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total Penghasilan</td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_total_minimal'] !== null ? formatNumber($dashboard['penghasilan_total_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_total_median'] !== null ? formatNumber($dashboard['penghasilan_total_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['penghasilan_total_maksimal'] !== null ? formatNumber($dashboard['penghasilan_total_maksimal']) : '' : '' ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="-intro-x col-span-12 border p-5 border-slate-300">
                    <div class="flex items-center h-10">
                        <div>
                            <h2 class="text-lg font-semibold">
                            Present Value Penghasilan
                            </h2>
                            <p style="font-style:italic;">Jika Pembayaran PPIP & Personal Pasar Keuangan Menggunakan Anuitas</p>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nilai Estimasi</th>
                                    <th>Minimal</th>
                                    <th>Median</th>
                                    <th>Maksimal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Layer PPMP</td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_ppmp'] !== null ? formatNumber($dashboard['pv_penghasilan_ppmp']) : '' : '' ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Layer PPIP</td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_ppip_minimal'] !== null ? formatNumber($dashboard['pv_penghasilan_ppip_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_ppip_median'] !== null ? formatNumber($dashboard['pv_penghasilan_ppip_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_ppip_maksimal'] !== null ? formatNumber($dashboard['pv_penghasilan_ppip_maksimal']) : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <td>Layer Personal-Pasar Keuangan</td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_personal_keuangan_minimal'] !== null ? formatNumber($dashboard['pv_penghasilan_personal_keuangan_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_personal_keuangan_median'] !== null ? formatNumber($dashboard['pv_penghasilan_personal_keuangan_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_personal_keuangan_maksimal'] !== null ? formatNumber($dashboard['pv_penghasilan_personal_keuangan_maksimal']) : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <td>Layer Personal-Properti</td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_personal_properti'] !== null ? formatNumber($dashboard['pv_penghasilan_personal_properti']) : '' : '' ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total Penghasilan</td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_total_minimal'] !== null ? formatNumber($dashboard['pv_penghasilan_total_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_total_median'] !== null ? formatNumber($dashboard['pv_penghasilan_total_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_penghasilan_total_maksimal'] !== null ? formatNumber($dashboard['pv_penghasilan_total_maksimal']) : '' : '' ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="-intro-x col-span-12 border p-5 border-slate-300">
                    <div class="flex items-center h-10">
                        <div>
                            <h2 class="text-lg font-semibold">
                            Estimasi Total Kekayaan Saat Pension
                            </h2>
                            <p style="font-style:italic;">Jika Pembayaran PPIP & Personal Pasar Keuangan Menggunakan Anuitas</p>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nilai Estimasi</th>
                                    <th>Minimal</th>
                                    <th>Median</th>
                                    <th>Maksimal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Layer PPMP</td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_ppmp'] !== null ? formatNumber($dashboard['kekayaan_ppmp']) : '' : '' ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Layer PPIP</td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_ppip_minimal'] !== null ? formatNumber($dashboard['kekayaan_ppip_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_ppip_median'] !== null ? formatNumber($dashboard['kekayaan_ppip_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_ppip_maksimal'] !== null ? formatNumber($dashboard['kekayaan_ppip_maksimal']) : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <td>Layer Personal-Pasar Keuangan</td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_personal_keuangan_minimal'] !== null ? formatNumber($dashboard['kekayaan_personal_keuangan_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_personal_keuangan_median'] !== null ? formatNumber($dashboard['kekayaan_personal_keuangan_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_personal_keuangan_maksimal'] !== null ? formatNumber($dashboard['kekayaan_personal_keuangan_maksimal']) : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <td>Layer Personal-Properti</td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_personal_properti'] !== null ? formatNumber($dashboard['kekayaan_personal_properti']) : '' : '' ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total Kekayaan</td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_total_minimal'] !== null ? formatNumber($dashboard['kekayaan_total_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_total_median'] !== null ? formatNumber($dashboard['kekayaan_total_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['kekayaan_total_maksimal'] !== null ? formatNumber($dashboard['kekayaan_total_maksimal']) : '' : '' ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="-intro-x col-span-12 border p-5 border-slate-300">
                    <div class="flex items-center h-10">
                        <div>
                            <h2 class="text-lg font-semibold">
                            Present Value Kekayaan
                            </h2>
                            <p style="font-style:italic;">Jika Pembayaran PPIP & Personal Pasar Keuangan Menggunakan Anuitas</p>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nilai Estimasi</th>
                                    <th>Minimal</th>
                                    <th>Median</th>
                                    <th>Maksimal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Layer PPMP</td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_ppmp'] !== null ? formatNumber($dashboard['pv_kekayaan_ppmp']) : '' : '' ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Layer PPIP</td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_ppip_minimal'] !== null ? formatNumber($dashboard['pv_kekayaan_ppip_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_ppip_median'] !== null ? formatNumber($dashboard['pv_kekayaan_ppip_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_ppip_maksimal'] !== null ? formatNumber($dashboard['pv_kekayaan_ppip_maksimal']) : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <td>Layer Personal-Pasar Keuangan</td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_personal_keuangan_minimal'] !== null ? formatNumber($dashboard['pv_kekayaan_personal_keuangan_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_personal_keuangan_median'] !== null ? formatNumber($dashboard['pv_kekayaan_personal_keuangan_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_personal_keuangan_maksimal'] !== null ? formatNumber($dashboard['pv_kekayaan_personal_keuangan_maksimal']) : '' : '' ?></td>
                                </tr>
                                <tr>
                                    <td>Layer Personal-Properti</td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_personal_properti'] !== null ? formatNumber($dashboard['pv_kekayaan_personal_properti']) : '' : '' ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total Kekayaan</td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_total_minimal'] !== null ? formatNumber($dashboard['pv_kekayaan_total_minimal']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_total_median'] !== null ? formatNumber($dashboard['pv_kekayaan_total_median']) : '' : '' ?></td>
                                    <td><?= $dashboard ? $dashboard['pv_kekayaan_total_maksimal'] !== null ? formatNumber($dashboard['pv_kekayaan_total_maksimal']) : '' : '' ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    <!-- END: Content -->
    </div>
</div>

<script>     
const showLoading = function() {
  Swal.fire({
    title: 'Load Your Tracking Report',
    text: 'Do not leave the web until process complete',
    allowEscapeKey: false,
    allowOutsideClick: false,
    timer: 2000,
    didOpen: () => {
      swal.showLoading();
    }
  })
  .then(() => {
        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener("readystatechange", function() {
            if(this.readyState === 4) {
                Swal.fire({
                    icon: 'success',
                    title: 'Tracking Complete!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(()=>{
                    location.reload();
                })
            }
        });

        xhr.open("POST", "<?= base_url() ?>dashboard/generate_data");
        xhr.send();
    });
}
//showLoading();

document.getElementById("generateBtn")
  .addEventListener('click', (event) => {
    showLoading();
  });
</script>
