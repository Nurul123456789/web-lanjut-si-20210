<?php

 
 class Mahasiswa extends CI_controller
{
	public function index()
	{
	$this->load->view('mahasiswa/v_index');
 }

public function jurusan()
{
	# code...
	echo "D3 Sistem Informasi";
}

}


