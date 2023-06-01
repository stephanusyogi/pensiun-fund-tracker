<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_controller {
	
	function __construct(){
		parent::__construct();		
    $this->session_status = $this->session->userdata('pension_fund_tracker_isLoggedIn');
		$this->id_user = $this->session->userdata('pension_fund_tracker_data')['id'];
		$this->token = $this->session->userdata('pension_fund_tracker_token');
		$this->temp_data = $this->session->userdata('pension_fund_tracker_data_temp');
		
		if (!$this->session_status) {
			$this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
		}else{
			$check_kuisioner = $this->send_request("check-kuisioner-empty/{$this->id_user}", $this->token, "GET");
			$check_data_empty = $this->send_request("check-data-empty/{$this->id_user}", $this->token, "GET");
			
			if (!$check_kuisioner["status"]) {
				$this->session->set_flashdata('error', 'Lengkapi Data Kuisioner Anda!');
				redirect(base_url()."kuisioner");
			}
			
			if (!$check_data_empty["status"]) {
				$this->session->set_flashdata('error', 'Lengkapi Data Profil & Biodata Anda!');
				redirect(base_url()."profil/".$this->id_user);
			}
			
			if (!$this->temp_data) {
				$this->session->set_flashdata('error', 'Mohon Isi Kembali Gaji & PhDP Anda!');
				redirect(base_url()."profil/update-tracking-pengguna/".$this->id_user);
			}

		}
	}

	public function index()
	{
		$token = $this->session->userdata('pension_fund_tracker_token');
		// Check Email Verification
		$check = $this->send_request("email/checkverified", $token, "GET");
		if (!$check["status"]) {
			redirect(base_url()."email-verification");
		}

		$data['title'] = "Dashboard";
    $data['menuLink'] = "dashboard";

		$this->load->view('includes/header', $data);
		$this->load->view('v_dashboard', $data);
		$this->load->view('includes/footer', $data);
	}

	public function generate_data(){
		
	}
}
