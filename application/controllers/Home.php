<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$new = $this->m_buku->getNew(3);
		$data['new'] = $new;
		$terpopuler = $this->m_buku->getTerpopuler(4);
		$data['terpopuler'] = $terpopuler;
		$data['bekasterpopuler'] = $this->m_buku->getBekasTerpopuler(4);
		$this->load->view('v_home', $data);
	}
	

}
