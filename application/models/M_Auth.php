<?php
	class M_Auth extends CI_model
	{
		public function __construct()
		{
			parent::__construct();
		}		

		public function login($username, $password)
		{
			$query = $this->db
				->where(['username' => $username, 'password' => $password])
				->from('users')
				->get();

			//SELECT * FROM users WHERE username = $username AND password = $password
			
			return $query->result();
			
		}
}
?>
