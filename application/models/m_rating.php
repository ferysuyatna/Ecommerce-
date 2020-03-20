<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Rating extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAllRating(){
		$query = $this->db->get('rating');
		return $query->row_array();
	}

	public function insertRating($rating){
		$this->db->insert('rating', $rating);
	}

	public function deleteRating($id){
		$this->db->where('id_rating',$id);
		$this->db->delete('rating');
	}
	
	public function updateRating($id, $rating){
		$this->db->where('id_rating', $id);
		$this->db->update('rating', $rating);
	}

}
