<?php

class m_mahasiswa extends CI_Model

{
	private $tabel = 'AModel';

	public function getAll()

{
	return $this->db->get($this->tabel)->result();
}

public function create($object)
{
return $this->db->insert($this->tabel, $object);

}
 
}	             
