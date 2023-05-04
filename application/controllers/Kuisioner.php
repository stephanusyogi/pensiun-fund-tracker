<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisioner extends MY_controller {
	function __construct(){
		parent::__construct();		
    $this->session_status = $this->session->userdata('pension_fund_tracker_isLoggedIn');
		$this->id_user = $this->session->userdata('pension_fund_tracker_data')['id'];
		$this->temp_data = $this->session->userdata('pension_fund_tracker_data_temp');
		$this->token = $this->session->userdata('pension_fund_tracker_token');
		
		if (!$this->session_status) {
			$this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
		}else{
			$check_kuisioner = $this->send_request("check-kuisioner-empty/{$this->id_user}", $this->token, "GET");
			$check_data_empty = $this->send_request("check-data-empty/{$this->id_user}", $this->token, "GET");
			
			if ($check_kuisioner["status"]) {
				if (!$this->temp_data) {
					$this->session->set_flashdata('error', 'Mohon Isi Kembali Gaji & PhDP Anda!');
					redirect(base_url()."profil/update-tracking-pengguna/".$this->id_user);
				}
			}
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
		$token = $this->session->userdata('pension_fund_tracker_token');
		$postData = $this->input->post();
		
		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		$data_activity = array(
			"id_user" => $id_user,
			'browser' => $agent,
			'sistem_operasi' => $this->agent->platform(),
			'ip_address' => $this->input->ip_address()
		);
		$this->send_request_with_data("kuisioner-activity", $token, "POST", $data_activity);

		$this->input_kuisioner_api("BEKERJA_KONSUMSI", $id_user, (float) $postData["bekerja_konsumsi"]);	
		$this->input_kuisioner_api("PENSIUN_KONSUMSI", $id_user, (float) $postData["pensiun_konsumsi"]);	
		
		$this->input_kuisioner_api("BEKERJA_UTILITIES", $id_user, (float) $postData["bekerja_utilities"]);	
		$this->input_kuisioner_api("PENSIUN_UTILITIES", $id_user, (float) $postData["pensiun_utilities"]);	
		
		$this->input_kuisioner_api("BEKERJA_TRANSPORTASI", $id_user, (float) $postData["bekerja_transportasi"]);	
		$this->input_kuisioner_api("PENSIUN_TRANSPORTASI", $id_user, (float) $postData["pensiun_transportasi"]);	
		
		$this->input_kuisioner_api("BEKERJA_CICILAN", $id_user, (float) $postData["bekerja_cicilan"]);	
		$this->input_kuisioner_api("PENSIUN_CICILAN", $id_user, (float) $postData["pensiun_cicilan"]);	
		
		$this->input_kuisioner_api("BEKERJA_IBADAH", $id_user, (float) $postData["bekerja_ibadah"]);	
		$this->input_kuisioner_api("PENSIUN_IBADAH", $id_user, (float) $postData["pensiun_ibadah"]);	
		
		$this->input_kuisioner_api("BEKERJA_PENDIDIKAN", $id_user, (float) $postData["bekerja_pendidikan"]);	
		$this->input_kuisioner_api("PENSIUN_PENDIDIKAN", $id_user, (float) $postData["pensiun_pendidikan"]);	
		
		$this->input_kuisioner_api("BEKERJA_KESEHATAN", $id_user, (float) $postData["bekerja_kesehatan"]);	
		$this->input_kuisioner_api("PENSIUN_KESEHATAN", $id_user, (float) $postData["pensiun_kesehatan"]);	
		
		$this->input_kuisioner_api("BEKERJA_HIBURAN", $id_user, (float) $postData["bekerja_hiburan"]);	
		$this->input_kuisioner_api("PENSIUN_HIBURAN", $id_user, (float) $postData["pensiun_hiburan"]);	
		
		$this->input_kuisioner_api("BEKERJA_INVESTASI", $id_user, (float) $postData["bekerja_investasi"]);	
		$this->input_kuisioner_api("PENSIUN_INVESTASI", $id_user, (float) $postData["pensiun_investasi"]);	
		
		$this->input_kuisioner_api("BEKERJA_LAIN", $id_user, (float) $postData["bekerja_lain"]);	
		$this->input_kuisioner_api("PENSIUN_LAIN", $id_user, (float) $postData["pensiun_lain"]);	
		
		$this->input_kuisioner_api("BEKERJA_TOTAL_PENGELUARAN", $id_user, (float) $postData["bekerja_total_pengeluaran"]);	
		$this->input_kuisioner_api("PENSIUN_TOTAL_PENGELUARAN", $id_user, (float) $postData["pensiun_total_pengeluaran"]);	

		$this->input_kuisioner_api("GAJI", $id_user, (float) $postData["gaji"]);	

		$this->input_kuisioner_api("FREE_CASHFLOW", $id_user, (float) $postData["free_cashflow"]);	

		$this->input_kuisioner_api("TARGET_RR", $id_user, (float) $postData["pensiun_total_pengeluaran"] / (float) $postData["gaji"]);	
		
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
