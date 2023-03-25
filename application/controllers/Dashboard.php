<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_controller {
	
	function __construct(){
		parent::__construct();		
    $this->session_status = $this->session->userdata('pension_fund_tracker_isLoggedIn');
		
		if (!$this->session_status) {
			$this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
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
}
