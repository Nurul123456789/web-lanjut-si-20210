<?php

class m_pengguna extends CI_model
{

	private $table = 'pengguna';

	public function cek_login($input_username, $input_password)
	{
		$this->db->where('username', $input_username);
		$this->db->where('username', $input_password);
		return $this->de->get($this->table);
	}
	public function getAll()
	{
		return $this->db->get($this->table)
		            ->result();
	}
	public function create($object)
	{
		return $this->db->insert($this->table, $object);
	}
	public function delete($input_username)
	{
		$this->db->delete($this->tabel, ['username' => $input_username]);
	}
	public function getwhere($input_username)
	{
		return $this->db->get_where($this->tabel, ['username' => $input_username])->row_object(
		);
	}
}