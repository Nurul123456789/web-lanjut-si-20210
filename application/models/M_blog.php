<?php
class M_blog extends CI_Model
{
	private $table ="blog";

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}
	public function add($data_input)
	{
		$this->db->insert($this->table, $data_input);
	}
}
