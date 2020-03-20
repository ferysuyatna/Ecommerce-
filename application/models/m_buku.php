<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Buku extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAll(){
		$query = $this->db->get('buku');
		return $query->result_array();
	}

	public function getByKategori($kategori){
		$query = $this->db->query("SELECT * FROM buku WHERE kategori = '$kategori'");
		return $query->result_array();
	}

	public function getByJudul($judul){
		$query = $this->db->query("SELECT * FROM buku WHERE judul LIKE '%$judul%'");
		return $query->result_array();
	}

	public function getById($id){
		$query = $this->db->query("SELECT * FROM buku WHERE id_buku = '$id'");
		return $query->result_array();
	}

	public function getRelated($judul, $kategori, $id){
		$query = $this->db->query("SELECT * FROM buku WHERE (judul LIKE '%$judul%' OR kategori LIKE '%$kategori%') AND id_buku <> '$id' LIMIT 4");
		return $query->result_array();
	}

	public function getRelatedRest($judul, $kategori, $id, $rest){
		$query = $this->db->query("SELECT * FROM buku WHERE (judul NOT LIKE '%$judul%' AND kategori NOT LIKE '%$kategori%') AND id_buku <> '$id' LIMIT $rest");
		return $query->result_array();
	}

	public function getTerpopuler($count){
		$query = $this->db->query("SELECT * FROM buku ORDER BY rating DESC LIMIT $count");
		return $query->result_array();
	}

	public function getBekasTerpopuler($count){
		$query = $this->db->query("SELECT * FROM buku WHERE bekas=true ORDER BY rating DESC LIMIT $count");
		return $query->result_array();
	}

	public function getEtalase($username){
		$query = $this->db->query("SELECT * FROM buku WHERE username = '$username'");
		return $query->result_array();
	}

	public function getNew($count){
		$query = $this->db->query("SELECT * FROM buku ORDER BY id_buku DESC LIMIT $count");
		return $query->result_array();
	}

	public function insert($buku){
		return $this->db->insert('buku', $buku);
	}

	public function delete($id){
		$this->db->where('id_buku',$id);
		$this->db->delete('keranjang');

		$this->db->where('id_buku',$id);
		return $this->db->delete('buku');
	}
	
	public function update($id, $buku){
		$this->db->where('ID_BUKU', $id);
		return $this->db->update('buku', $buku);
	}

}
