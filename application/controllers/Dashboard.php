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

		$dashboard = $this->send_request('generate-data-dashboard?id_user='.$this->id_user, $this->token, 'GET');

		$data['title'] = "Dashboard";
    $data['menuLink'] = "dashboard";
		$data['dashboard'] = $dashboard["data"] ? $dashboard["data"][0] : $dashboard["data"];

		$this->load->view('includes/header', $data);
		$this->load->view('v_dashboard', $data);
		$this->load->view('includes/footer', $data);
	}

	public function generate_data(){
		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		$data = array(
			'tgl_update_gaji_phdp' => $this->session->userdata('pension_fund_tracker_data_temp')['tgl_update_gaji_phdp'],
			'gaji' => $this->session->userdata('pension_fund_tracker_data_temp')['gaji'],
			'phdp' => $this->session->userdata('pension_fund_tracker_data_temp')['phdp'],
			'browser' => $agent,
			'sistem_operasi' => $this->agent->platform(),
			'ip_address' => $this->input->ip_address(),
		);
		
		echo json_encode($data, true);
		die();

		$response = $this->send_request_with_data('generate-data-dashboard?id_user='.$this->id_user, $this->token, 'POST', $data);

		echo json_encode($response, true);
	}
}
