<?php

class D_Controller extends CI_controller
{

	public function __construct(){
		parent::__ construct();
		$this->load->model('D_models');
	}
	// untuk menampilkan data
	public function index() { 
		$data['isi_tabel'] = $this->D_models->semuaData();

		var_dump($data);
		die();

		$this->load->view('UTS/v_tampil');
    
}

}