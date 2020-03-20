<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

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
		$this->load->model("m_keranjang");
	}
	public function index()
	{
		
		
	}
	public function addBuku(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$jum = $this->input->post('jumlah');

		$data = array(
			'username' => $username,
			'id_buku' => $id,
			'jumlah' => $jum
		);

		$this->m_keranjang->insert($data);
	}

	public function getBuku(){
		$username = $this->input->post('username');
		$data = $this->m_keranjang->getByUsername($username);
		echo json_encode($data);
	}
	

	public function deleteBuku()
	{
		$username = $this->input->post("username");
		$bookId = $this->input->post("book");



		
	}

}
