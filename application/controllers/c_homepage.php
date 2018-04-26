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

	public function deleteData()
	{
		$id_mahasiswa = $this->uri->segment(3);
		$this->m_homepage->deleteMahasiswa($id_mahasiswa);
		redirect('c_homepage');
	}

	public function updateData()
	{	
		$id_mahasiswa = $this->uri->segment(3);
		$data['mahasiswa'] = $this->m_homepage->getOneMahasiswa($id_mahasiswa);
		$this->load->view('new_mahasiswa', $data);
	}
}
?>