<?php
require APPPATH . '/libraries/REST_Controller.php';

class Reserve extends REST_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Memodel');
		$this->soft_deletes = TRUE;
	}
	public function index_post(){
		$data = $this->post();
		if($this->Memodel->insert($data)){
			$this->response(array('status'=> 'success'),200);
		}
		else{
			$this->response(array('status'=> 'error'),500);
		}
	}
	public function index_get(){
		if($data = $this->Memodel->get_all()){
			$this->response(array('status'=> 'success','data' => $data),200);
		}
		else{
			$this->response(array('status' =>'error'),404);
		}
	}
	public function index_delete(){
		$data = $this->post();
  		if($query = $this->Memodel->delete($data)){
			$this->response(array('status'=> 'success','message' => $query),200);
		}
		else{
			$this->response(array('status' =>'error'),404);
		}
	}
}
?>