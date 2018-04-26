<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
	<h1>Ini adalah Homepage</h1>

	<table>
		<tr>
			<th>ID</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
		</tr>
		<?php
	 	foreach ($mahasiswa->result() as $mhs) 
	 		{ ?>
	 		<tr>
	 			<td><?php echo $mhs->id;?></td>
	 			<td><?php echo $mhs->npm;?></td>
	 			<td><?php echo $mhs->nama;?></td>
	 			<td><?php echo $mhs->jk;?></td>
	 			<td><?php echo $mhs->tgl_lhr;?></td>
	 			<td><?php echo $mhs->alamat; ?></td>
	 			<td>
		 			<form method="POST" action="<?php echo site_url(); ?>/c_homepage/deleteData/<?php echo $mhs->id ?>">
						<button type="submit">Hapus</button>
		 			</form>
	 			</td>
	 		</tr>
		<?php 
			} ?> 
	</table>

	<h2><a href="<?php echo site_url(); ?>/c_homepage/gantiHalaman">Ke halaman New Mahasiswa</a></h2>
</body>
</html>