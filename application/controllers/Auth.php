<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_controller {
	public function login()
	{
		$this->load->view('v_auth_login');
	}

	public function login_verication(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			"email" => $email,
			"password" => $password,
		);

		$response = $this->send_request_with_data_untoken("login", "POST", $data);

		if ($response["status"]) {
			$nama = explode(" ", $response['data']['nama'])[0];
			$this->session->set_userdata('pension_fund_tracker_data', $response["data"]);
			$this->session->set_userdata('pension_fund_tracker_token', $response["access_token"]);
			$this->session->set_userdata('pension_fund_tracker_isLoggedIn', true);

			// Check Email Verification
			$check = $this->send_request("email/checkverified", $response["access_token"], "GET");

			if (!$check["status"]) {
				$this->session->set_flashdata('error', "Email anda belum ter-verfikasi!");
				redirect(base_url()."email-verification");
			}else{
				$this->session->set_flashdata('success', "Login Berhasil. Selamat Datang, {$nama}!");
				redirect(base_url());
			}
		} else {
			$this->session->set_flashdata('error', 'Username/Password Anda Salah!');
			redirect(base_url() . 'login');
		}
		
	}
  
	public function register()
	{
		$this->load->view('v_auth_register');
	}

	public function register_verification(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$no_hp = $this->input->post('no_hp');

		$data = array(
			"nama" => $nama,
			"email" => $email,
			"password" => $password,
			"no_hp" => $no_hp,
		);

		$response = $this->send_request_with_data_untoken("register", "POST", $data);

		$nama = explode(" ", $response['data']['nama'])[0];
		$this->session->set_userdata('pension_fund_tracker_data', $response["data"]);
		$this->session->set_userdata('pension_fund_tracker_token', $response["access_token"]);
		$this->session->set_userdata('pension_fund_tracker_isLoggedIn', true);

		// Send Email Verification
		$res = $this->send_request("email/verify", $response["access_token"], "POST");
		
		$this->session->set_flashdata('success', "Registrasi Berhasil. Selamat Datang, {$nama}!");
		redirect(base_url()."email-verification");
	}

	public function forgot_password()
	{
		$this->load->view('v_auth_forgot_password');
	}
	
	public function change_password()
	{
		$this->load->view('v_auth_change_password');
	}
	
	public function email_verification()
	{
			$session_status = $this->session->userdata('pension_fund_tracker_isLoggedIn');
			if (!$session_status) {
				$this->session->set_flashdata('error', 'Your Session Has Expired!');
				return redirect(base_url() . 'login');
			}	

			$token = $this->session->userdata('pension_fund_tracker_token');
			$email_verify_url = $this->input->get("email_verify_url");
			
			// Check Email Verification
			$check = $this->send_request("email/checkverified", $token, "GET");

			if (!$check["status"]) {
				if ($email_verify_url) {
					$res = $this->send_request_email_verify($email_verify_url, $token, "GET");
					$this->session->set_flashdata('success', "Email berhasil diverifikasi!");
					redirect(base_url());
				} else {
					$this->load->view('v_auth_email_verification');
				}
			}else{
				redirect(base_url());
			}	
			
	}

	public function send_email_verification(){
		$session_status = $this->session->userdata('pension_fund_tracker_isLoggedIn');
		if (!$session_status) {
			$this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
		}	
		
		$token = $this->session->userdata('pension_fund_tracker_token');
		$res = $this->send_request("email/verify", $token, "POST");

		$this->session->set_flashdata('success', "Pesan verifikasi berhasil dikirim!");
		redirect(base_url()."email-verification");
	}
	
	public function logout()
	{
		$token = $this->session->userdata('pension_fund_tracker_token');
		$res = $this->send_request("logout", $token, "GET");
		session_destroy();
		redirect(base_url() . 'login');
	}
}
