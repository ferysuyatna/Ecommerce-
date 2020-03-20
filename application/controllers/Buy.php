<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buy extends CI_Controller {

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
		$id = $this->input->get('id');

		$data = $this->m_buku->getById($id)[0];

		$related = $this->m_buku->getRelated($data['JUDUL'], $data['KATEGORI'], $data['ID_BUKU']);
		//print_r($related);
		if(count($related) > 0){
			if(count($related) < 4){
				$rest = $this->m_buku->getRelatedRest($data['JUDUL'], $data['KATEGORI'],$data['ID_BUKU'], 4 - count($related));
				foreach($rest as $r){
					array_push($related, $r);
				}
			}
			$data['related'] =  $related;
		} else {
			$rest = $this->m_buku->getRelatedRest($data['JUDUL'], $data['KATEGORI'],$data['ID_BUKU'], 4 - count($related));
			$data['related'] =  $rest;
		}
		//print_r($related);
		$this->load->view('v_buy', $data);
	}
	

}
