<?php include('server3.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Admin Login</h2>
	</div>
	
	<form method="post" action="admin_manage.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Admin Id</label>
			<input type="text" name="id">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user1">Login</button>
		</div>
	</form>


</body>
</html>