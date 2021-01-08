<?php

class D_models extends CI_Model
{
	private $tabel = 'tabel_d';

	public function semuaData()
	{
		return $this->db->get($this->tabel)->result();
	}
	
}