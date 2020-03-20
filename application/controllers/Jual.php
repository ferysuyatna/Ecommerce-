<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jual extends CI_Controller {

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
		$this->load->model("m_buku");
	}

	public function index()
	{
		$this->load->view('v_jual');
	}

	public function tambah_buku(){
		/*
			Rizaldo Laksana (1301164371)
		*/
		if(!$this->session->has_userdata('username')){
			redirect('Home');
		}
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '500';
		$config['max_width'] = '10000';
		$config['max_height'] = '10000';

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('img')){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect('Jual');
		} else {
			$data = array(
				'judul' => $this->input->post('judul'),
				'pengarang' => $this->input->post('pengarang'),
				'harga' => $this->input->post('harga'),
				'jumlah' => $this->input->post('stok'),
				'deskripsi' => $this->input->post('deskripsi'),
				'gambar' => $this->upload->data()['file_name'],
				'username' => $this->session->userdata('username'),
				'kategori' => $this->input->post('kategori'),
				'rating' => 0,
				'bekas' => $this->input->post('bekas')
			);
			$insert = $this->m_buku->insert($data);
			if($insert){
				$this->session->set_flashdata('error', 'Berhasil menambahkan Buku');
				redirect('Jual');
			} else {
				$this->session->set_flashdata('error', 'Gagal menambahkan buku');
				redirect('Jual');
			}
			
		}


	}
	

}
