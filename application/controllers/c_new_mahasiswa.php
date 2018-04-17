<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_new_mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('new_mahasiswa');
	}
}
?>