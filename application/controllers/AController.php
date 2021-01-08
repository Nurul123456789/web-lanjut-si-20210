<?php

 
 class AController extends CI_controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('tabel_b');

	}

	public function index($url_nim = '',$url_jur ='')
	{
		$data['nama'] = 'nurulamin';
		$data['umur'] = '18';
		$data['nim'] = $url_nim;
		$data['jurusan'] = $url_jur;
		$data['tbl_mahasiswa'] = $this->m_mahasiswa->getAll();
		$this->load->view('mahasiswa/v_index',$data);
  
    
 	}

	public function jurusan()
	{
		# code...
		echo "D3 Sistem Informasi";
	}
	 public function tambah()
	{
		$this->load->view('mahasiswa/v_tambah');
	}
	 public function simpan_data()
	{
		$data = [
		   'nim' => $this->input-> post('nim'),
		   'nama' => $this->input-> post('nama'),
		   'alamat' => $this->input-> post('alamat')
		];
		$this->m_mahasiswa->create($data);
		redirect('mahasiswa/index','refresh');


	} 

}