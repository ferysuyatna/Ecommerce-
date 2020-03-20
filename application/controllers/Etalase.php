<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etalase extends CI_Controller {

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
		$username = $this->session->userdata('username');
		$etalase = $this->m_buku->getEtalase($username);
		$data['etalase'] = json_encode($etalase);
		$this->load->view('v_etalase', $data);
	}

	public function getEtalase(){
		/*
			Krisnhadi bima 1301164014
		*/
		$username = $this->session->userdata('username');
		$etalase = $this->m_buku->getEtalase($username);
		echo json_encode($etalase);
	}

	public function getBuku(){
		/*
			Krisnhadi bima 1301164014
		*/
		$id = $this->input->post('id');
		if($id != null){
			$buku = $this->m_buku->getById($id)[0];
			echo json_encode($buku);
		}
	}
	
	public function updateBuku(){
		/*
			Made Raharja Surya Mahadi (1301160039)
		*/
		if($this->input->post('id') != null){
			$id = $this->input->post('id');
			$data = array (
				'JUDUL' => $this->input->post('judul'),
				'PENGARANG' => $this->input->post('penulis'),
				'KATEGORI' => $this->input->post('kategori'),
				'BEKAS' => $this->input->post('bekas'),
				'HARGA' => $this->input->post('harga'),
				'JUMLAH' => $this->input->post('stok'),
				'DESKRIPSI' => $this->input->post('deskripsi'),
				'USERNAME' => $this->session->userdata('username')
			);

			$res = $this->m_buku->update($id, $data);
			
			if($res){
				echo "Berhasil mengedit buku";
			} else {
				echo "Gagal mengedit buku";
			}
		} 
		
	}

	public function hapusBuku(){
		/*
			Made Raharja Surya Mahadi (1301160039)
		*/
		if($this->input->post('id') != null){
			$id = $this->input->post('id');
			
			$res = $this->m_buku->delete($id);
			
			if($res){
				echo "Berhasil menghapus buku";
			} else {
				echo "Gagal menghapus buku";
			}
		} 
	}
}
