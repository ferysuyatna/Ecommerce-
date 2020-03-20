<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_user");
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$data = $this->m_user->getUserDataByUsername($username)[0];
		$this->load->view('v_profile', $data);
	}

	public function edit(){
		/*
			Aedhelio Pratama 1301160271
		*/
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$insert = $this->m_user->update($data['username'],$data);
		if ($insert) {
			$this->session->set_flashdata('error','Berhasil mengupdate data');
			redirect('Profile');
		} else {
			$this->session->set_flashdata('error','Gagal mengupdate data');
			redirect('Profile');
		}
	}
	

}
