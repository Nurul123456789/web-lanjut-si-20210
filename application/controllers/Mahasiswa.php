<?php 

 
 class mahasiswa extends CI_controller{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_mahasiswa');

	}

	public function index()
	{
		$data['tbl_mahasiswa'] = $this->m_mahasiswa->getAll();
		$this->load->view('template/header');
		$this->load->view('mahasiswa/v_index', $data);
 	}

	public function jurusan()
	{
		# code...
		echo "D3 Sistem Informasi";
	}
	 public function tambah()
	 {
	 	$this->load->view('template/header');
	 	$this->load->view('mahasiswa/v_tambah');
	 }

	 

   public function simpan_data()
   {
      $data = [
      'nim' => $this->input->post('nim'),
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat')
    ];

    $this->m_mahasiswa->create($data);
    redirect('mahasiswa/index','refresh');

    }

    public function hapus($input_nim)
    {
    	$this->m_mahasiswa->delete($input_nim);
    	redirect('mahasiswa/index');
    }
    
    public function edit($input_nim)
    {

      $data['data_nim'] = $this->m_mahasiswa->getWhere($input_nim);
      $this->load->view('template/header');
      return $this->load->view('mahasiswa/v_edit',$data);
    }

    public function update(){
      $nim = $this->input->post('nim');
      $nama = $this->input->post('nama');
      $alamat= $this->input->post('alamat');

      $data = array(
        'nim' => $nim,
        'nama' => $nama,
        'alamat' => $alamat,

      
      );

      $this->m_mahasiswa->update($data,$nim);
      redirect('mahasiswa/index');
    }


}

