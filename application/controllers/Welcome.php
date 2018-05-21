<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('account');
		
	}

	public function index()
	{	
		
		$this->load->view('dashboard');
	}

	public function widget(){
		$this->load->view('widget');
	}



	/*--------------------------------adsfsadf*/
	public function task(){
		$this->load->view('task');
	}

	public function register(){
		$data = $this->input->post();
		if($data['password'] != $data['confirmpassword']){
			$response['fail'] = 'Your password does not match in confirmation!Please Try Again!';
			$this->load->view('task',$response);
		}
		else{
			$this->account->register($data);
			$response['success'] = "You've been successfully registered";
			$this->load->view('task',$response);
		}
	}
	public function signin(){
		$data = $this->input->post();
		$checker = $this->account->checker($data)->num_rows();
		$datas = $this->account->checker($data)->result();
		if($checker < 1){
			$response['message'] = 'Account does not exist';
			$this->load->view('task',$response);
		}
		else{
			$userdata = array(
				'username' => ucfirst($datas[0]->username),
				'isLoggedIn'=> 1
			);
			$this->session->set_userdata($userdata);

			$response['message'] = 'Successfully Logged In!';
			$response['username'] = $this->session->username;
			$response['isLoggedIn'] = $this->session->isLoggedIn;
			$this->load->view('task',$response);
		}
		
	}
	/*public function reserve(){
		$this
	}*/
}
