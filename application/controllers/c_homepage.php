<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_homepage extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_homepage');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->m_homepage->getMahasiswa();
		$this->load->view('homepage', $data);	
	}

	public function gantiHalaman()
	{
		$this->load->view('new_mahasiswa');
	}
}
?>