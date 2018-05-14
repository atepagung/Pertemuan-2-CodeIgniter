<?php
	class m_new_mahasiswa extends CI_model
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
	
			public function registerMahasiswa($data)
				{
					$this->db->insert('mahasiswa', $data);
				}

			public function updateMahasiswa($id_mahasiswa, $npm, $nama, $jenis_kelamin, $tanggal_lahir, $alamat)
				{
					$data = array(
							'npm' => $npm,
							'nama' => $nama,
							'jk' => $jenis_kelamin,
							'tgl_lhr' => $tanggal_lahir,
							'alamat' => $alamat
					);

					$this->db->where('id', $id_mahasiswa)
										->update('mahasiswa', $data);
				}
		}
?>
