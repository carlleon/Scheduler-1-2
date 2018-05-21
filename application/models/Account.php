<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Model{

	public function register($data){
		$sql = "INSERT into tbl_users(full_name,email,birthday,username,password) VALUES('".$data['fullname']."','".$data['email']."','".$data['birthdate']."','".$data['username']."','".$data['password']."')";
		return $this->db->query($sql);
	}

	public function checker($data){
		$sql = "SELECT * from tbl_users WHERE username ='".$data['username']."' AND password='".$data['password']."'";
		return $this->db->query($sql);

	}
}