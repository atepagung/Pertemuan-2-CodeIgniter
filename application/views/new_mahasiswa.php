<!DOCTYPE html>
<html>
<head>
	<title>New Mahasiswa</title>
</head>
<body>
	<h1>Halaman New Mahasiswa</h1>
	<form method="POST" action="<?php echo base_url('index.php/c_new_mahasiswa/addData'); ?>">
 	<table>
 	<tr>
 		<td>
			<label>NPM</label>
			<input type="text" name="npm">
 		</td>
 	</tr>
 	<tr>
 		<td>
			<label>Nama</label>
			<input type="text" name="nama">
 		</td>
 	</tr>
 	<tr>
 		<td>
			<label>Jenis Kelamin</label>
			<input type="text" name="jk">
 		</td>
 	</tr>
 	<tr>
 		<td>
 			<label>Tanggal Lahir</label>
 			<input type="date" name="tgl_lhr">
 		</td>
 	</tr>
 	<tr>
 		<td>
			<label>Alamat Rumah</label>
			<input type="text" name="alamat">
 		</td>
 	</tr>
 	<tr>
 		<td>
 			<button type="submit">Submit</button>
 		</td>	
 	</tr>
 	</table>
	</form>
	<h2><a href="<?php echo site_url(); ?>/c_new_mahasiswa/keHomepage">Kembali ke halaman awal</a></h2>
</body>
</html>