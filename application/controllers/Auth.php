<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_controller {
	public function login()
	{
		$this->load->view('v_auth_login');
	}
  
	public function register()
	{
		$this->load->view('v_auth_register');
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
		$this->load->view('v_auth_email_verification');
	}
}
