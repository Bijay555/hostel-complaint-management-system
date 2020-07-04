<?php 
	session_start();

	// variable declaration
	$Student_Id = "";
	$roomno = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db1 = mysqli_connect('localhost', 'root', '', 'dbms');

	// REGISTER USER
	if (isset($_POST['sub_user'])) {
		// receive all input values from the form
		$complaint_date = mysqli_real_escape_string($db1, $_POST['complaint_date']);
		$Student_Id = mysqli_real_escape_string($db1, $_POST['Student_Id']);
		$phoneno = mysqli_real_escape_string($db1, $_POST['phoneno']);
		$roomno = mysqli_real_escape_string($db1, $_POST['roomno']);
		$complaint_type = mysqli_real_escape_string($db1, $_POST['complaint_type']);
		$description = mysqli_real_escape_string($db1, $_POST['description']);

		// form validation: ensure that the form is correctly filled
		if (empty($Student_Id)) { array_push($errors, "Student_Id is required"); }
		if (empty($complaint_type)) { array_push($errors, "complaint_type is required"); }
		if (empty($roomno)) { array_push($errors, "Email is required"); }
		if (empty($complaint_date)) { array_push($errors, "date is required"); }

		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query1 = "INSERT INTO complaints (complaint_date, Student_Id, phoneno, roomno, complaint_type, description) 
					  VALUES ('$complaint_date','$Student_Id','$phoneno', '$roomno', '$complaint_type','$description')";
			$results1 = mysqli_query($db1, $query1);


			if (mysqli_num_rows($results1) == 1) {
				
				$_SESSION['success'] = "Your complaint is registered";
				header('location: problem.php');
			}
			else {
				array_push($errors, "Wrong input");
			}

			$_SESSION['success'] = "Your complaint is registered ";
			header('location: problem.php');
		}
		else {
			array_push($errors, "Wrong input1");
		}
	}
	
?>

