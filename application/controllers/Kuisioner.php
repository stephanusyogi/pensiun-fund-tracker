<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisioner extends MY_controller {
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
		$id_user = $this->session->userdata('pension_fund_tracker_data')["id"];

		$answer = $this->send_request("user-answer-question/{$id_user}", $token, "GET");
		$pertanyaan = $this->send_request("kuisioner", $token, "GET");
		$data['title'] = "Kuisioner";
    $data['menuLink'] = "kuisioner";
		$data['pertanyaan'] = $pertanyaan;
		$data['answer'] = $answer["data"];

		$this->load->view('includes/header', $data);
		$this->load->view('v_kuisioner', $data);
		$this->load->view('includes/footer', $data);
	}

	public function add(){
		$id_user = $this->session->userdata('pension_fund_tracker_data')["id"];

		$bekerja_total_pengeluaran = (float) $this->input->post('bekerja_konsumsi') + (float) $this->input->post('bekerja_utilities') + (float) $this->input->post('bekerja_transportasi') + (float) $this->input->post('bekerja_cicilan') + (float) $this->input->post('bekerja_pendidikan') + (float) $this->input->post('bekerja_kesehatan') + (float) $this->input->post('bekerja_hiburan') + (float) $this->input->post('bekerja_investasi') + (float) $this->input->post('bekerja_lain')+ (float) $this->input->post('bekerja_ibadah');
		
		$pensiun_total_pengeluaran = (float) $this->input->post('pensiun_konsumsi') + (float) $this->input->post('pensiun_utilities') + (float) $this->input->post('pensiun_transportasi') + (float) $this->input->post('pensiun_cicilan') + (float) $this->input->post('pensiun_pendidikan') + (float) $this->input->post('pensiun_kesehatan') + (float) $this->input->post('pensiun_hiburan') + (float) $this->input->post('pensiun_investasi') + (float) $this->input->post('pensiun_lain')+ (float) $this->input->post('pensiun_ibadah');

		$this->input_kuisioner_api("BEKERJA_KONSUMSI", $id_user, $this->input->post('bekerja_konsumsi'));	
		$this->input_kuisioner_api("PENSIUN_KONSUMSI", $id_user, $this->input->post('bekerja_konsumsi'));	
		
		$this->input_kuisioner_api("BEKERJA_UTILITIES", $id_user, $this->input->post('bekerja_utilities'));	
		$this->input_kuisioner_api("PENSIUN_UTILITIES", $id_user, $this->input->post('pensiun_utilities'));	
		
		$this->input_kuisioner_api("BEKERJA_TRANSPORTASI", $id_user, $this->input->post('bekerja_transportasi'));	
		$this->input_kuisioner_api("PENSIUN_TRANSPORTASI", $id_user, $this->input->post('pensiun_transportasi'));	
		
		$this->input_kuisioner_api("BEKERJA_CICILAN", $id_user, $this->input->post('bekerja_cicilan'));	
		$this->input_kuisioner_api("PENSIUN_CICILAN", $id_user, $this->input->post('pensiun_cicilan'));	
		
		$this->input_kuisioner_api("BEKERJA_IBADAH", $id_user, $this->input->post('bekerja_ibadah'));	
		$this->input_kuisioner_api("PENSIUN_IBADAH", $id_user, $this->input->post('pensiun_ibadah'));	
		
		$this->input_kuisioner_api("BEKERJA_PENDIDIKAN", $id_user, $this->input->post('bekerja_pendidikan'));	
		$this->input_kuisioner_api("PENSIUN_PENDIDIKAN", $id_user, $this->input->post('pensiun_pendidikan'));	
		
		$this->input_kuisioner_api("BEKERJA_KESEHATAN", $id_user, $this->input->post('bekerja_kesehatan'));	
		$this->input_kuisioner_api("PENSIUN_KESEHATAN", $id_user, $this->input->post('pensiun_kesehatan'));	
		
		$this->input_kuisioner_api("BEKERJA_HIBURAN", $id_user, $this->input->post('bekerja_hiburan'));	
		$this->input_kuisioner_api("PENSIUN_HIBURAN", $id_user, $this->input->post('pensiun_hiburan'));	
		
		$this->input_kuisioner_api("BEKERJA_INVESTASI", $id_user, $this->input->post('bekerja_investasi'));	
		$this->input_kuisioner_api("PENSIUN_INVESTASI", $id_user, $this->input->post('pensiun_investasi'));	
		
		$this->input_kuisioner_api("BEKERJA_LAIN", $id_user, $this->input->post('bekerja_lain'));	
		$this->input_kuisioner_api("PENSIUN_LAIN", $id_user, $this->input->post('pensiun_lain'));	
		
		$this->input_kuisioner_api("BEKERJA_TOTAL_PENGELUARAN", $id_user, $bekerja_total_pengeluaran);	
		$this->input_kuisioner_api("PENSIUN_TOTAL_PENGELUARAN", $id_user, $pensiun_total_pengeluaran);	

		$this->input_kuisioner_api("GAJI", $id_user, $this->input->post('gaji'));	

		$this->input_kuisioner_api("FREE_CASHFLOW", $id_user, (float)$this->input->post('gaji')-(float)$bekerja_total_pengeluaran);	

		$this->input_kuisioner_api("TARGET_RR", $id_user, (float)$pensiun_total_pengeluaran/(float)$this->input->post('gaji'));	
		
		$this->session->set_flashdata('success', 'Update Kuisioner Berhasil!');
		return redirect(base_url() . 'kuisioner');
	}
	
	function input_kuisioner_api($kode_kuisioner, $id_user, $answer){
		$token = $this->session->userdata('pension_fund_tracker_token');
		$data = array(
			"kode_kuisioner" => $kode_kuisioner,
			"id_user" => $id_user,
			"answer" => $answer,
		);

		$this->send_request_with_data("answer-question", $token, "POST", $data);
	}
}
