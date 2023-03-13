<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisioner extends MY_controller {
	public function index()
	{
		$data['title'] = "Kuisioner";
    $data['menuLink'] = "kuisioner";

		$this->load->view('includes/header', $data);
		$this->load->view('v_kuisioner', $data);
		$this->load->view('includes/footer', $data);
	}
}
