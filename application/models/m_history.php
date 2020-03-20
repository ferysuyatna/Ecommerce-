<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_History extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAllHistory(){
		$query = $this->db->get('history');
		return $query->row_array();
	}

	public function insertHistory($history){
		$this->db->insert('history', $history);
	}

	public function deleteHistory($id){
		$this->db->where('id_history',$id);
		$this->db->delete('history');
	}
	
	public function updateHistory($id, $history){
		$this->db->where('id_history', $id);
		$this->db->update('history', $history);
	}

}
