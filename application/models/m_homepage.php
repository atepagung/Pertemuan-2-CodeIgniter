<?php
	class m_homepage extends CI_model
		{
			 public function __construct()
				{
		      parent::__construct();
				}		
				
			public function getMahasiswa()
				{
					return $this->db->select('*')
											->from('mahasiswa')
											->get();
				}		
		}
?>
