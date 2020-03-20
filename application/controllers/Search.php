<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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
		$this->load->view('v_search');
	}

	public function getBukuJson(){
		$mode = $this->input->post('mode');
		$value = $this->input->post('value');
		switch ($mode) {
			case 'kategori':
				$buku = $this->m_buku->getByKategori($value);
				break;
			case 'title':
				$buku = $this->m_buku->getByJudul($value);
				break;
			default:
				$buku = getAll();
				break;
		}
		
		$data_buku = array();
		foreach($buku as $b){
			array_push($data_buku, array(
				'title' => $b['JUDUL'],
				'rating' => $b['RATING'],
				'price' => $b['HARGA'],
				'thumb' => "uploads/".$b['GAMBAR'],
				'bekas' => $b['BEKAS'],
				'id' => $b['ID_BUKU']
			));
		}
		echo json_encode($data_buku);
		
	}
	
}
