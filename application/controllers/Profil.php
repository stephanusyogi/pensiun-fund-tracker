<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_controller {
	public function index($id_user)
	{
		$data['title'] = "Profil";
    $data['menuLink'] = "profil";

		$this->load->view('includes/header', $data);
		$this->load->view('v_profil', $data);
		$this->load->view('includes/footer', $data);
	}
}
