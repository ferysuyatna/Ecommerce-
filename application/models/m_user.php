<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAll(){
		$query = $this->db->get('user');
		return $query->result_array();
	}

	public function getUserDataByUsername($username){
		$query = $this->db->query("SELECT * FROM user WHERE username = '$username'")->result_array();
		if(count($query) == 1){
			return $query;
		} else {
			return null;
		}
	}

	public function cekLogin($username, $password){
		$query = $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'")->result_array();
		if(count($query) == 1){
			return $query;
		} else {
			return null;
		}
	}

	public function insert($user){
		$this->db->where('username', $user['username']);
		$query = $this->db->get('user')->result_array();
		
		if(count($query) == 0){
			$res = $this->db->insert('user', $user);
			if($res){
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
		
	}

	public function delete($username){
		$this->db->where('username',$username);
		$this->db->delete('user');
	}
	
	public function update($username, $user){
		$this->db->where('username', $username);
		return $this->db->update('user', $user);
	}

}
