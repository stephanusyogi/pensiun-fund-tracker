<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_controller extends  CI_controller
{
  
	function __construct(){
		parent::__construct();		
    // $this->api_base_url = "http://127.0.0.1:8000/api/";
    $this->api_base_url = "https://api.yourpensiontracker.id/api/";
	}

  function send_request($url, $token, $method){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $this->api_base_url . $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $method,
      CURLOPT_HTTPHEADER => array(
        'Accept: application/json',
        'Authorization: Bearer '.$token
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

		$res = json_decode($response, true);
		return $res;
  }

  function send_request_with_data($url, $token, $method, $data){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $this->api_base_url . $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $method,
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_HTTPHEADER => array(
        'Accept: application/json',
        'Authorization: Bearer '.$token
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

		$res = json_decode($response, true);
		return $res;
  }

  function send_request_with_data_untoken($url, $method, $data){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $this->api_base_url . $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $method,
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_HTTPHEADER => array(
        'Accept: application/json'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

		$res = json_decode($response, true);
		return $res;
  }
  
  function send_request_email_verify($url, $token, $method){
    
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $method,
      CURLOPT_HTTPHEADER => array(
        'Accept: application/json',
        'Authorization: Bearer '.$token,
        'Cookie: pension_fund_tracker_session=zJdpwibs9SQnore95MiCmHxnwmF74I1MQgtXQy5t'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

		$res = json_decode($response, true);
		return $res;
  }
}