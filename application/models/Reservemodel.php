<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservemodel extends CI_Model{

	public function add($data){
		$sql = "INSERT into tbl_reserve(description,time_start,time_end) VALUES('".$data['description']."','".$data['time_start']."','".$data['time_end']."')";
		return $this->db->query($sql);
	}
	public function get(){
		$sql = "SELECT * from tbl_reserve";
		return $this->db->query($sql)->result();
	}

	public function delete($id){
		$sql = "DELETE from tbl_reserve WHERE id = '$id'";
		return $this->db->query($sql);
	}
}