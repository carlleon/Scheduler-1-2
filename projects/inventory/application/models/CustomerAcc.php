<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerAcc extends CI_Model {
	public $title;
	public $password;

	public function insert_entry(){
        $this->title    = $_POST['email'];
        $this->content  = $_POST['password'];
        $this->date     = time();

        $this->db->insert('entries', $this);
    }
}
?>