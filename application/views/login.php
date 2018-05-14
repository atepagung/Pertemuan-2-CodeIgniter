<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/style.css">
	<title>Login</title>
	<style type="text/css">
		td {
			padding-right: 24px;
		}
	</style>
</head>
<body>
		
		<h1>Login</h1>
	
		<form class="form-group" method="POST" action="<?php echo base_url('index.php/auth') ?>">
	
		<table>
			<tr>
				<td>
					<label>Username</label>
				</td>
				<td>
					<input class="form-control" type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					<label>Password</label>
				</td>
				<td>
					<input class="form-control" type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Login</button>
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>