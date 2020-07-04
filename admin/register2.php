<?php include('server4.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

	<div class="header">
		<h2>Staff Registration</h2>
	</div>
	
	<form method="post" action="register2.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Staff Name</label>
			<input type="text" name="staffname" value="<?php echo $staffname; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Phone No.</label>
			<input type="text" name="phone_no">
		</div>
		<div class="input-group">
			<label>Registration Date</label>
			<input type="date" name="reg_date" value="<?php echo date("Y-m-d h:i:s");?>">
		</div>
		<div class="input-group">
			<label for="department">Department</label>
    		<select id="department" name="department">
      			<option value="Electricity issue">Electricity issue</option>
      			<option value="Carpentry issue">Carpentry issue</option>
      			<option value="leakage issue">leakage issue</option>
      			<option value="Cleaning/housekeeping issue">Cleaning/housekeeping issue</option>
      			<option value="Mess food issue">Mess food issue</option>
      			<option value="Other issue">Other issue</option>
    		</select>
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="reg2_user">Add to List</button>
		</div>
	</form>
</body>
</html>