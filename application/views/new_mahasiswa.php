<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/style.css">
	<title>New Mahasiswa</title>
	<style type="text/css">
		td {
			padding-right: 24px;
		}
	</style>
</head>
<body>
	<?php if(isset($mahasiswa)) {?>
		<!-- Inline CSS -->
		<h1>Halaman Edit Mahasiswa</h1>
	<?php } else { ?>
		<h1>Halaman New Mahasiswa</h1>
	<?php } ?>

	<?php if(isset($mahasiswa)) {?>	
		<form class="form-group" method="POST" action="<?php echo base_url()?>index.php/c_new_mahasiswa/updateData/<?php echo $mahasiswa->row()->id; ?>">
	<?php } else { ?>
		<form class="form-group" method="POST" action="<?php echo base_url('index.php/c_new_mahasiswa/addData') ?>">
	<?php } ?>
		<table>
			<tr>
				<td>
					<label>NPM</label>
				</td>
				<td>
					<input class="form-control" type="text" name="npm" <?php if(isset($mahasiswa)){ ?> value="<?php echo $mahasiswa->row()->npm; }?>" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Nama</label>
				</td>
				<td>
					<input class="form-control" type="text" name="nama" <?php if(isset($mahasiswa)){ ?> value="<?php echo $mahasiswa->row()->nama; ?>" <?php } ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Jenis Kelamin</label>
				</td>
				<td>
					<input class="form-control" type="text" name="jk" <?php if(isset($mahasiswa)){ ?> value="<?php echo $mahasiswa->row()->jk; ?>" <?php } ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Tanggal Lahir</label>
				</td>
				<td>
					<input class="form-control" type="date" name="tgl_lhr" <?php if(isset($mahasiswa)){ ?> value="<?php echo $mahasiswa->row()->tgl_lhr; ?>" <?php } ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Alamat</label>
				</td>
				<td>
					<input class="form-control" type="text" name="alamat" <?php if(isset($mahasiswa)){ ?> value="<?php echo $mahasiswa->row()->alamat; ?>" <?php } ?> >
				</td>
			</tr>
			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Submit</button>
				</td>
			</tr>
		</table>
	</form>
	
	<h2><a class="btn btn-info" href="<?php echo site_url(); ?>/c_new_mahasiswa/keHomepage">Kembali ke halaman awal</a></h2>
</body>
</html>