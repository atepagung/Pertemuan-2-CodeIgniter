<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Auth extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Auth');
		$this->load->library('session');
	}

	public function login_form()
	{
		return $this->load->view('login');
	}

	public function login()
	{

		$data = [
			'username' => $this->input->post('username'), 
			'password' => $this->input->post('password')
		];

		$auth = $this->M_Auth->login($data['username'], $data['password']);

		if ($auth != NULL) {
			$session_data = [
				'username' => $this->input->post('username')
			];

			$this->session->set_userdata('logged_in', $session_data);
			redirect('');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');

		echo "Logout Success";
	}
}
?>