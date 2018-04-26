<!DOCTYPE html>
<html>
<head>
	<title>New Mahasiswa</title>
</head>
<body>
	<?php if(isset($mahasiswa)) {?>
		<h1>Halaman Edit Mahasiswa</h1>
	<?php } else { ?>
		<h1>Halaman New Mahasiswa</h1>
	<?php } ?>

	<?php if(isset($mahasiswa)) {?>	
		<form method="POST" action="<?php echo base_url()?>index.php/c_new_mahasiswa/updateData/<?php echo $mahasiswa->row()->id; ?>">
	<?php } else { ?>
		<form method="POST" action="<?php echo base_url('index.php/c_new_mahasiswa/addData') ?>">
	<?php } ?>
		<table>
			<tr>
				<td>
					<label>NPM</label>
					<input type="text" name="npm" <?php if(isset($mahasiswa)){ ?> value="<?php echo $mahasiswa->row()->npm; }?>" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Nama</label>
					<input type="text" name="nama" <?php if(isset($mahasiswa)){ ?> value="<?php echo $mahasiswa->row()->nama; ?>" <?php } ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Jenis Kelamin</label>
					<input type="text" name="jk" <?php if(isset($mahasiswa)){ ?> value="<?php echo $mahasiswa->row()->jk; ?>" <?php } ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Tanggal Lahir</label>
					<input type="date" name="tgl_lhr" <?php if(isset($mahasiswa)){ ?> value="<?php echo $mahasiswa->row()->tgl_lhr; ?>" <?php } ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Alamat</label>
					<input type="text" name="alamat" <?php if(isset($mahasiswa)){ ?> value="<?php echo $mahasiswa->row()->alamat; ?>" <?php } ?> >
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