<?php 
session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$roomno ="";
	$errors = array(); 
	$_SESSION['success'] = "";
	$aid = $_GET['Student_Id'];

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'dbms');

	// REGISTER USER
	if (isset($_POST['reg_user3'])) {
		// receive all input values from the form
		$Student_Id = mysqli_real_escape_string($db, $_POST['Student_Id']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$roomno = mysqli_real_escape_string($db, $_POST['roomno']);

		// form validation: ensure that the form is correctly filled
		if (empty($Student_Id)) { array_push($errors, "Student_Id is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "UPDATE registration SET username='$username', email='$email', password='$password', roomno='$roomno' WHERE 
						Student_Id='$aid'";
					  
			if (mysqli_query($db, $query)) {
  				echo "Record updated successfully";
  				$_SESSION['success'] = "Your data successfully updates";
				header('location: student_manage.php');
			} 
			else {
  			echo "Error updating record ";
			}

		
			
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Update Registration Details</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Student Id</label>
			<input type="text" name="Student_Id" value="<?php echo $aid; ?>">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<label>Room No.</label>
			<input type="text" name="roomno" value="<?php echo $roomno; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user3">Register</button>
		</div>
	</form>
</body>
</html>