<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_new_mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_new_mahasiswa');
	}

	public function index()
	{
		$this->load->view('new_mahasiswa');
	}
	
	public function keHomepage()
	{
		$data['mahasiswa'] = $this->m_new_mahasiswa->getMahasiswa();
		$this->load->view('homepage', $data);	
	}
}
?>