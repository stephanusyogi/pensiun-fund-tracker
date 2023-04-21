<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_controller {
	function __construct(){
		parent::__construct();		
    $this->session_status = $this->session->userdata('pension_fund_tracker_isLoggedIn');
		$this->id_user = $this->session->userdata('pension_fund_tracker_data')['id'];
		$this->token = $this->session->userdata('pension_fund_tracker_token');
		
		if (!$this->session_status) {
			$this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
		}	else{
			$check_kuisioner = $this->send_request("check-kuisioner-empty/{$this->id_user}", $this->token, "GET");
			
			if (!$check_kuisioner["status"]) {
				$this->session->set_flashdata('error', 'Lengkapi Data Kuisioner Anda!');
				redirect(base_url()."kuisioner");
			}
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

	public function update_tracking_pengguna($id_user){
		$data['title'] = "Profil - Update Tracking Pengguna";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_update_tracking_pengguna', $data);
		$this->load->view('includes/footer', $data);
	}

	public function setting_portofolio_ppip($id_user){
		$data['title'] = "Profil - Setting Portofolio PPIP";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_setting_portofolio_ppip', $data);
		$this->load->view('includes/footer', $data);
	}

	public function setting_nilai_asumsi($id_user){
		$data['title'] = "Profil - Setting Nilai Asumsi";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_setting_nilai_asumsi', $data);
		$this->load->view('includes/footer', $data);
	}

	public function setting_portofolio_personal_pasar_keuangan($id_user){
		$data['title'] = "Profil - Setting Personal Pasar Keuangan";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_setting_portofolio_personal_pasar_keuangan', $data);
		$this->load->view('includes/footer', $data);
	}

	public function setting_treatment_pembayaran_setelah_pensiun($id_user){
		$data['title'] = "Profil - Setting Treatment Pembayaran Setelah Pensiun";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil_setting_treatment_pembayaran_setelah_pensiun', $data);
		$this->load->view('includes/footer', $data);
	}

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
