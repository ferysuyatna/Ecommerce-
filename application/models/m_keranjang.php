<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Keranjang extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($data){
		return $this->db->insert('keranjang', $data);
	}

	public function getByUsername($username){
		$query = $this->db->query("SELECT * FROM keranjang JOIN buku USING (ID_BUKU) WHERE keranjang.username = '$username'");
		return $query->result_array();
	}

}
