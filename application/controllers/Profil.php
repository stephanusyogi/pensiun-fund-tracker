<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_controller {
	function __construct(){
		parent::__construct();		
    $this->session_status = $this->session->userdata('pension_fund_tracker_isLoggedIn');
		$this->id_user = $this->session->userdata('pension_fund_tracker_data')['id'];
		$this->token = $this->session->userdata('pension_fund_tracker_token');
		$this->temp_data = $this->session->userdata('pension_fund_tracker_data_temp');
		
		if (!$this->session_status) {
			$this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
		}	else{
			$check_kuisioner = $this->send_request("check-kuisioner-empty/{$this->id_user}", $this->token, "GET");
			
			if (!$check_kuisioner["status"]) {
				$this->session->set_flashdata('error', 'Lengkapi Data Kuisioner Anda!');
				redirect(base_url()."kuisioner");
			}
			// if (!$this->temp_data) {
			// 	$this->session->set_flashdata('error', 'Mohon Isi Kembali Gaji & PhDP Anda!');
			// 	redirect(base_url()."profil/update-tracking-pengguna/".$this->id_user);
			// }
		}
	}
	public function index($id_user)
	{		

		$data_user = $this->send_request("user/{$this->id_user}", $this->token, "GET");
		$data_pengumuman = $this->send_request("pengumuman", $this->token, "GET")['data'];

		$data['data_user'] = $data_user["data"];
		$data['data_pengumuman'] = $data_pengumuman;
		$data['title'] = "Profil";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil', $data);
		$this->load->view('includes/footer', $data);
	}

	public function update_biodata($id_user){
		$token = $this->session->userdata('pension_fund_tracker_token');
		$postData = $this->input->post();

		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		$data_temp = array(
			'tgl_update_gaji_phdp' => date("Y-m-d"),
			'gaji' => $postData['gaji'],
			'phdp' => $postData['phdp'],
		);
		$this->session->set_userdata('pension_fund_tracker_data_temp', $data_temp);

		$dataUpdate = array(
			'id_user' => $id_user,
			'browser' => $agent,
			'sistem_operasi' => $this->agent->platform(),
			'ip_address' => $this->input->ip_address(),
			'_method' => 'PUT',
			'nama' => $postData['nama'],
			'email' => $postData['email'],
			'password' => $this->session->userdata('pension_fund_tracker_data')['password'],
			'no_hp' => $postData['no_hp'],
			'nip' => $postData['nip'],
			'satker' => $postData['satker'],
			'tgl_lahir' => $postData['tgl_lahir'],
			'tgl_diangkat_pegawai' => $postData['tgl_diangkat_pegawai'],
			'usia_diangkat_tahun' => $postData['usia_diangkat_tahun'],
			'usia_diangkat_bulan' => $postData['usia_diangkat_bulan'],
			'usia_pensiun' => $postData['usia_pensiun'],
			'tgl_registrasi' => $postData['tgl_registrasi'],
			'layer_ppmp' => 1,
			'layer_ppip' => 1,
			'layer_personal' => $postData['layer_personal'],
			'terdapat_investasi_pensiun' => ($postData['layer_personal'] === "1") ? $postData['terdapat_investasi_pensiun'] : null,
			'jumlah_investasi_keuangan' => ($postData['layer_personal'] === "1") ? $postData['jumlah_investasi_keuangan'] : null,
			'jumlah_investasi_properti' => ($postData['layer_personal'] === "1") ? $postData['jumlah_investasi_properti'] : null,
			'sewa_properti' => ($postData['layer_personal'] === "1") ? $postData['sewa_properti'] : null,
			'kenaikan_properti' => ($postData['layer_personal'] === "1") ? $postData['kenaikan_properti'] : null,
			'kenaikan_sewa' => ($postData['layer_personal'] === "1") ? $postData['kenaikan_sewa'] : null,
			'rencana_penambahan_saldo_bulan_ini' => $postData['rencana_penambahan_saldo_bulan_ini'],
			'penambahan_saldo_tentative_personal_keuangan' => ($postData['rencana_penambahan_saldo_bulan_ini'] === "1") ? $postData['penambahan_saldo_tentative_personal_keuangan'] : null,
			'penambahan_saldo_tentative_personal_properti' => ($postData['rencana_penambahan_saldo_bulan_ini'] === "1") ? $postData['penambahan_saldo_tentative_personal_properti'] : null,
			'saldo_ppip' => $postData['saldo_ppip'],
		);
		$response = $this->send_request_with_data('user/'.$id_user, $token, 'POST', $dataUpdate);
		
		$this->session->set_flashdata('success', "Update Berhasil!");
		redirect(base_url()."profil/".$id_user);
	}

	// Update Tracking Pengguna
	public function update_tracking_pengguna($id_user){
		$data_tracking = $this->send_request("update-tracking-data?id_user=".$this->id_user, $this->token, "GET");

		$data['data_tracking'] = $data_tracking["data"];
		$data['title'] = "Profil - Update Tracking Pengguna";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_update_tracking_pengguna', $data);
		$this->load->view('includes/footer', $data);
	}

	public function update_tracking_pengguna_execute(){
		$postData = $this->input->post();

		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		$postData['id_user'] = $this->id_user;
		$postData['browser'] = $agent;
		$postData['sistem_operasi'] = $this->agent->platform();
		$postData['ip_address'] = $this->input->ip_address();
		
		$response = $this->send_request_with_data('update-tracking-data', $this->token, 'POST', $postData);
		
		$data_temp = array(
			'gaji' => $postData['gaji'],
			'phdp' => $postData['phdp'],
		);
		$this->session->set_userdata('pension_fund_tracker_data_temp', $data_temp);
		
		$this->session->set_flashdata('success', "Update Tracking Data Berhasil!");
		redirect(base_url()."profil/update-tracking-pengguna/".$this->id_user);
	}

	// Setting PPIP
	public function setting_portofolio_ppip($id_user){	

		$data_setting_ppip = $this->send_request("setting-ppip/user?id_user=".$this->id_user, $this->token, "GET");

		$data['opsi_setting_ppip'] = $data_setting_ppip["opsi"];
		$data['data_setting_ppip'] = $data_setting_ppip["data"];
		$data['title'] = "Profil - Setting Portofolio PPIP";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_setting_portofolio_ppip', $data);
		$this->load->view('includes/footer', $data);
	}

	public function setting_portofolio_ppip_execute(){
		$id_investasi = $this->input->post()['id_portofolio_ppip'];
		
		$postData = $this->send_request("setting-ppip/user?id_investasi=".$id_investasi, $this->token, "GET")['data'][0];

		$nama_pilihan = $postData['nama_portofolio'];

		unset($postData["id"]);
		unset($postData["nama_portofolio"]);
		unset($postData["flag"]);
		unset($postData["created_at"]);

		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		$postData['id_user'] = $this->id_user;
		$postData['browser'] = $agent;
		$postData['sistem_operasi'] = $this->agent->platform();
		$postData['ip_address'] = $this->input->ip_address();

		$postData['id_setting_portofolio_ppip_admin'] = $id_investasi;
		$postData['nama_pilihan'] = $nama_pilihan;

		$response = $this->send_request_with_data('setting-ppip/user/add?id_investasi='.$id_investasi, $this->token, 'POST', $postData);
		
		$this->session->set_flashdata('success', "Update Setting PPIP Berhasil!");
		redirect(base_url()."profil/setting-portofolio-ppip/".$this->id_user);
	}

	public function setting_portofolio_ppip_by_id($id_investasi){
		$data = $this->send_request("setting-ppip/user?id_investasi=".$id_investasi, $this->token, "GET")['data'][0];
		echo json_encode($data, true);
	}
	
	// Setting Personal Keuangan
	public function setting_portofolio_personal_pasar_keuangan($id_user){		

		$data_setting_personal = $this->send_request("setting-personal-lifecycle/user?id_user=".$this->id_user, $this->token, "GET");

		$data['opsi_setting_personal'] = $data_setting_personal["opsi"];
		$data['data_setting_personal'] = $data_setting_personal["data"]['personal_keuangan'];
		$data['data_setting_komposisi'] = $data_setting_personal["data"]['komposisi_investasi'];
		$data['title'] = "Profil - Setting Personal Pasar Keuangan";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_setting_portofolio_personal_pasar_keuangan', $data);
		$this->load->view('includes/footer', $data);
	}

	public function setting_portofolio_personal_pasar_keuangan_execute(){
		$id_investasi = $this->input->post()['id_portofolio_personal'];
		$investasi = $this->send_request("setting-personal-lifecycle/user?id_investasi=".$id_investasi, $this->token, "GET")['data'];

		$nama_pilihan = $investasi['personal_keuangan'][0]['nama'];

		$personal_keuangan = $investasi['personal_keuangan'][0];
		$komposisi_investasi = $investasi['komposisi_investasi'][0];

		$keysToRemovePersonal = ['id', 'flag', 'created_at', 'nama'];	
		$keysToRemoveKomposisi = ['id', 'flag', 'created_at', 'nama', 'id_setting_portofolio_personal_admin'];

		$postData = [];
		foreach ($komposisi_investasi as $key => $value) {
			if (!in_array($key, $keysToRemoveKomposisi)) {
				$postData[$key] = $value;
			}
		}
		foreach ($personal_keuangan as $key => $value) {
			if (!in_array($key, $keysToRemovePersonal)) {
				$postData[$key] = $value;
			}
		}

		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		$postData['id_user'] = $this->id_user;
		$postData['browser'] = $agent;
		$postData['sistem_operasi'] = $this->agent->platform();
		$postData['ip_address'] = $this->input->ip_address();

		$postData['id_setting_portofolio_personal_admin'] = $id_investasi;
		$postData['nama'] = $nama_pilihan;

		$response = $this->send_request_with_data('setting-personal-lifecycle/user/add?id_investasi='.$id_investasi, $this->token, 'POST', $postData);
		
		$this->session->set_flashdata('success', "Update Setting Personal Berhasil!");
		redirect(base_url()."profil/setting-portofolio-personal/".$this->id_user);
	}

	public function setting_portofolio_personal_pasar_keuangan_by_id($id_investasi){
		$data = $this->send_request("setting-personal-lifecycle/user?id_investasi=".$id_investasi, $this->token, "GET")['data'];
		echo json_encode($data, true);
	}

	// Setting Nilai Asumsi
	public function setting_nilai_asumsi($id_user){		
		
		$data_setting_nilai_asumsi = $this->send_request("setting-nilai-asumsi/user?id_user=".$this->id_user, $this->token, "GET");

		$data['data_setting_nilai_asumsi'] = $data_setting_nilai_asumsi["data"];
		$data['title'] = "Profil - Setting Nilai Asumsi";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_setting_nilai_asumsi', $data);
		$this->load->view('includes/footer', $data);
	}

	public function setting_nilai_asumsi_execute(){
		$postData = $this->input->post();
		$nilai_admin = $this->send_request("setting-nilai-asumsi/user", $this->token, "GET")['data'][0];

		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		$postData['id_user'] = $this->id_user;
		$postData['browser'] = $agent;
		$postData['sistem_operasi'] = $this->agent->platform();
		$postData['ip_address'] = $this->input->ip_address();

		$postData['kenaikan_gaji'] = $nilai_admin['kenaikan_gaji'];
		$postData['kenaikan_phdp'] = $nilai_admin['kenaikan_phdp'];
		$postData['iuran_ppip'] = $nilai_admin['iuran_ppip'];
		$postData['dasar_pembayaran_iuran_personal'] = $nilai_admin['dasar_pembayaran_iuran_personal'];
		$postData['inflasi_jangka_panjang'] = $nilai_admin['inflasi_jangka_panjang'];

		$response = $this->send_request_with_data('setting-nilai-asumsi/user/add', $this->token, 'POST', $postData);

		$this->session->set_flashdata('success', "Update Setting Nilai Asumsi Berhasil!");
		redirect(base_url()."profil/setting-nilai-asumsi/".$this->id_user);
	}


	// Setting Treatment
	public function setting_treatment_pembayaran_setelah_pensiun($id_user){		
		$data_setting_treatment = $this->send_request("setting-treatment/user?id_user=".$this->id_user, $this->token, "GET");

		$data['data_setting_treatment'] = $data_setting_treatment["data"];
		$data['title'] = "Profil - Setting Treatment Pembayaran Setelah Pensiun";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_setting_treatment_pembayaran_setelah_pensiun', $data);
		$this->load->view('includes/footer', $data);
	}
	
	public function setting_treatment_pembayaran_setelah_pensiun_execute(){
		$postData = $this->input->post();

		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		$postData['id_user'] = $this->id_user;
		$postData['browser'] = $agent;
		$postData['sistem_operasi'] = $this->agent->platform();
		$postData['ip_address'] = $this->input->ip_address();


		$response = $this->send_request_with_data('setting-treatment/user/add', $this->token, 'POST', $postData);
		
		$this->session->set_flashdata('success', "Update Setting Treatment Pembayaran Berhasil!");
		redirect(base_url()."profil/setting-treatment-pembayaran-setelah-pensiun/".$this->id_user);
	}

	// Ubah Password
	public function ubah_password($id_user){
		$data['title'] = "Profil - Ubah Password";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_ubah_password', $data);
		$this->load->view('includes/footer', $data);
	}

	public function ubah_password_execute($id_user){
		$token = $this->session->userdata('pension_fund_tracker_token');
		$postData = $this->input->post();

		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		$data_ubah_password = array(
			'id_user' => $id_user,
			'browser' => $agent,
			'sistem_operasi' => $this->agent->platform(),
			'ip_address' => $this->input->ip_address(),
			'new_password' => $postData['password']
		);
		
		$response = $this->send_request_with_data('change-password', $token, 'POST', $data_ubah_password);
		
		$this->session->set_flashdata('success', "Update Password Berhasil!");
		redirect(base_url()."profil/ubah-password/".$id_user);
	}
}
