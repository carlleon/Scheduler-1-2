<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeAcc extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	// public $title;
	// public $password;

	// public function isAccountExist($data){
	// 	$this->db->select('*');
	// 	$this->db->from('tblaccounts');
	// 	$this->db->where('', $data['username']);
	// 	$this->db->where('password', $data['password']);

	// 	$result[0] =  $this->db->get();
		
	// 	if($result[0]->num_rows() == 1){
	// 		$result[0] = $result[0]->row();
	// 		$result[1] = true;
	// 		return $result;
	// 	}else{
	// 		$result[1] = false;
	// 		return $result;
	// 	}
	// }

// 	AJAX STARTS HERE
	public function showAllEmployee(){
		$query = $this->db->get('tblemployee');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function editEmployee(){
		$id = $this->input->get('id');
		$this->db->where('empid', $id);
		$query = $this->db->get('tblemployee');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function updateEmployee(){
		$id = $this->input->post('txtId');
		$field = array(
		'empid'			=>$this->input->post('txtEmployeeID'),
		'empsex'		=>$this->input->post('txtEmployeeSex'),
		'empdesignation'=>$this->input->post('txtEmployeeDesignation'),
		'supervisedby'	=>$this->input->post('txtEmployeeSupervisor'),
		);
		$this->db->where('empid', $id);
		$this->db->update('tblemployee', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	

	public function addEmployee(){
		$field = array(
			'empid'			=>$this->input->post('txtEmployeeID'),
			'empsex'		=>$this->input->post('txtEmployeeSex'),
			'empdesignation'=>$this->input->post('txtEmployeeDesignation'),
			'supervisedby'	=>$this->input->post('txtEmployeeSupervisor'),
			);
		$this->db->insert('tblemployee', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function deleteEmployee(){
		$id = $this->input->get('id');
		$this->db->where('empid', $id);
		$this->db->delete('tblemployee');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
// 	AJAX ENDS HERE
	
	// public function create($talbe, $data){
	//     return $this->db->insert($table, $data);
	// }

	// public function read($data = null){
	// 	// if($data != null){
	// 	// 	return $this->db->select('*')->from('tblemployee')->where('schoolid', $data)->get()->result();
	// 	// }

	// 	return $this->db->select('*')->from('tblemployee')->get()->result(); 
	// }	

	// public function dropdownOption($table, $data){
	// 	if($data != null){
	// 		return $this->db->select('*')->from('tblemployee')->where('schoolid', $data)->get()->result();
	// 		}

	// 	return 
	// }

	// public function update(){

	// }

	// public function delete(){

	// }

}
?>