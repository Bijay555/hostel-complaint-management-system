<?php 
	session_start();

	// variable declaration
	$staffname = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'dbms');

	// REGISTER USER
	if (isset($_POST['reg2_user'])) {
		// receive all input values from the form
		$staffname = mysqli_real_escape_string($db, $_POST['staffname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone_no = mysqli_real_escape_string($db, $_POST['phone_no']);
		$reg_date = mysqli_real_escape_string($db, $_POST['reg_date']);
		$department = mysqli_real_escape_string($db, $_POST['department']);


		// form validation: ensure that the form is correctly filled
		if (empty($staffname)) { array_push($errors, "Staff name  is required"); }
		if (empty($phone_no)) { array_push($errors, "Phone No is required"); }
		if (empty($department)) { array_push($errors, "Department name is required"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO staff (staffname, email, phone_no, reg_date, department) 
					  VALUES('$staffname', '$email', '$phone_no','$reg_date','$department')";
			mysqli_query($db, $query);
			$_SESSION['success'] = "Staff registered successfully ";
			header('location: admin_manage.php');
		}

	}
?>