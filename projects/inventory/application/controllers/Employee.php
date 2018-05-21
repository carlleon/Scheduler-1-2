<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('EmployeeAcc');
	}

	// 	AJAX STARTS HERE
	//Show Employee
	public function showAllEmployee(){
		$result = $this->EmployeeAcc->showAllEmployee();
		echo json_encode($result);
	}

	//Add Employee
	public function addEmployee(){
		$result = $this->EmployeeAcc->addEmployee();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	//Edit employee
	public function editEmployee(){
		$result = $this->EmployeeAcc->editEmployee();
		echo json_encode($result);
	}

	public function updateEmployee(){
		$result = $this->EmployeeAcc->updateEmployee();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteEmployee(){
		$result = $this->EmployeeAcc->deleteEmployee();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

// 	AJAX ENDS HERE
}
?>