<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('EmployeeAcc', 'm');
	}

	public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['home'] = 'home';	
		$this->load->view('template/customer/content', $data);
	}

	public function login(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['home'] = 'common/login';	
		$this->load->view('template/customer/content', $data);
	}

	public function registration(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['home'] = 'common/registration';	
		$this->load->view('template/customer/content', $data);
	}

	public function admin(){
		$data['pageTitle'] = 'Petalia Furnitures | Admin';
		$data['footer'] = 'Petalia Furnitures';

		$data['admin'] = 'admin-views/dashboard';	
		$this->load->view('template/admin/content', $data);
	}

	public function employee(){
		$data['pageTitle'] = 'Petalia Furnitures | Admin';
		$data['footer'] = 'Petalia Furnitures';

		$data['admin'] = 'admin-views/employee';	
		$this->load->view('template/admin/content', $data);
	}

	// public function empRegistration(){
	// 	$data['pageTitle'] = 'Petalia Furnitures | Admin';
	// 	$data['footer'] = 'Petalia Furnitures';

	// 	$data['admin'] = 'admin-views/empRegistration';	
	// 	$this->load->view('template/admin/content', $data);
	// }


// // 	AJAX STARTS HERE
// 	//Show Employee
// 	public function showAllEmployee(){
// 		$result = $this->m->showAllEmployee();
// 		echo json_encode($result);
// 	}

// 	//Add Employee
// 	public function addEmployee(){
// 		$result = $this->m->addEmployee();
// 		$msg['success'] = false;
// 		$msg['type'] = 'add';
// 		if($result){
// 			$msg['success'] = true;
// 		}
// 		echo json_encode($msg);
// 	}

// // 	AJAX ENDS HERE


	//Employee Registration procedure.
	// public function empRegister(){
	// 	$this->load->model('EmployeeAcc', 'employees');

	// 	if($this->input->post('password') == $this->input->post('repassword')){
	// 		$table = "tblemployee";
	// 		$data = array(
	// 			'empusername' 		=> $this->security->xss_clean($this->input->post('username')),
	// 			'emppassword' 		=> $this->security->xss_clean($this->input->post('password')),
	// 			'empemail'			=> $this->security->xss_clean($this->input->post('email')),
	// 			'empfname'			=> $this->security->xss_clean($this->input->post('firstname')),
	// 			'emplname'			=> $this->security->xss_clean($this->input->post('lastname')),
	// 			'empsex'			=> $this->security->xss_clean($this->input->post('gender')),
	// 			'empdesignation' 	=> $this->security->xss_clean($this->input->post('designation')),
	// 			'supervisedby' 		=> $this->security->xss_clean($this->input->post('supervisor'))
	// 		);

	// 		$result = $this->employees->create($table, $data);
			
	// 	}
	
	// 	$data['pageTitle'] = 'Petalia Furnitures | Admin';
	// 	$data['footer'] = 'Petalia Furnitures';
	// 	$data['admin'] = 'admin-views/empRegistration';	
	// 	$this->load->view('template/admin/content', $data);
	// }

	//Supervisor Selection
	// public function selectSupervisor(){
	// 	$this->load->model('EmployeeAcc', 'supervisors');
	// 	$options = $this->Supervisors->read($table,$data);
	// }

	//Functionals

	public function register(){
		$this->load->model('CustomerAcc','customeracc');

		if($this->input->post('password') == $this->input->post('repassword')){
			$table = "tblcustomers";
			$data = array(
				'schoolid' => $this->security->xss_clean($this->input->post('schoolid')),
				'username' => $this->security->xss_clean($this->input->post('username')),
				'password' => $this->security->xss_clean($this->input->post('password'))
			);

			$result = $this->customerAcc->create($table, $data);

			if($result){
				$server['msg'] = "Successfully Added";	
				$server['status_code'] = 1;
			}else{
				$server['msg'] = "Failed to add";
				$server['status_code'] = 0;
			}	
		}else{
			$server['msg'] = "Password doesn't match";
			$server['status_code'] = 0;
		}
		
		$server['pageTitle'] =
		$server['content'] = 'common/registration';
		$this->load->view('template/customer/content', $server);
	}
}
