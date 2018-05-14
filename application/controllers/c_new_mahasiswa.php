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

	public function addData()
	{
		$data = array(
				'npm'=>$this->input->post('npm'),
				'nama'=>$this->input->post('nama'),
				'jk'=>$this->input->post('jk'),
				'tgl_lhr'=>$this->input->post('tgl_lhr'),
				'alamat'=>$this->input->post('alamat')
			);
		$this->m_new_mahasiswa->registerMahasiswa($data);
		redirect('c_homepage');
	}

	public function updateData()
	{
		$id_mahasiswa = $this->uri->segment(3);
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jk');
		$tanggal_lahir = $this->input->post('tgl_lhr');
		$alamat = $this->input->post('alamat');

		$this->m_new_mahasiswa->updateMahasiswa($id_mahasiswa, $npm, $nama, $jenis_kelamin, $tanggal_lahir, $alamat);
		redirect('c_homepage');
	}
}
?>