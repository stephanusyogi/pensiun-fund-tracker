<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_controller {
	function __construct(){
		parent::__construct();		
    $this->session_status = $this->session->userdata('pension_fund_tracker_isLoggedIn');
		
		if (!$this->session_status) {
			$this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
		}	
	}
	public function index($id_user)
	{
		$data['title'] = "Profil";
    $data['menuLink'] = "profil/".$id_user;

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil', $data);
		$this->load->view('includes/footer', $data);
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
}
