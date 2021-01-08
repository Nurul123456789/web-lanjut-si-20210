<?php

class Blog extends CI_Controller
{
	public function __construct()
{
	parent::__construct();
   $this->load->model('M_blog');
   }
   public function index()
   {
   	$data['isi'] = $this->M_blog->getall();

   	$this->load->view('blog/v_tampil', $data);
   }
}

