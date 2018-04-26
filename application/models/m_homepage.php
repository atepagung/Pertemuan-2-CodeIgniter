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

				public function deleteMahasiswa($id)
				{
					return $this->db->where('id', $id)
							->delete('mahasiswa');
				}
		}
?>
