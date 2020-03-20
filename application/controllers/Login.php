<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('v_login');
	}

	public function cek_login(){
		$user = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		);
		$login = $this->m_user->cekLogin($user['username'], $user['password']);
		if($login != null){
			$sess = array(
				'username' => $login[0]['USERNAME'],
				'nama' => $login[0]['NAMA']
			);
			$this->session->set_userdata($sess);
			redirect('home');
		} else {
			$this->session->set_flashdata('login', 'Username atau Password salah');
			redirect('login');
		}
	}

	public function register(){
		$user = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email')
		);
		$insert = $this->m_user->insert($user);
		if($insert){
			$this->session->set_flashdata('register', 'Berhasil mendaftarkan akun, silahkah login');
			redirect('login');
		} else {
			$this->session->set_flashdata('register', 'Gagal mendaftarkan akun');
			redirect('login');
		}
	}
	

}
