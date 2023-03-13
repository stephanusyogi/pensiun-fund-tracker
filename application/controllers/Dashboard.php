<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_controller {
	public function index()
	{
		$data['title'] = "Dashboard";
    $data['menuLink'] = "dashboard";

		$this->load->view('includes/header', $data);
		$this->load->view('v_dashboard', $data);
		$this->load->view('includes/footer', $data);
	}
}
