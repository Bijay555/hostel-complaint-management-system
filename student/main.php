<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Student Complaints Page</h2>
	</div>


	<form method="post" action="main.php">


		<?php include('errors.php'); ?>

		<label for="complaint_date">Date of Complaint:</label>
  		<input type="date" id="complaint_date" name="complaint_date">

		<div class="input-group">
			<label>Student Id</label>
			<input type="text" name="Student_Id" value="<?php echo $Student_Id; ?>">
		</div>
		<div class="input-group">
			<label>Phone No.</label>
			<input type="text" name="phoneno">
		</div>
		<div class="input-group">
			<label>Room No.</label>
			<input type="text" name="roomno">
		</div>
		<div class="input-group">
			<label for="complaint_type">Complaint Type</label>
    		<select id="complaint_type" name="complaint_type">
      			<option value="Electricity issue">Electricity issue</option>
      			<option value="Carpentry issue">Carpentry issue</option>
      			<option value="leakage issue">leakage issue</option>
      			<option value="Cleaning/housekeeping issue">Cleaning/housekeeping issue</option>
      			<option value="Mess food issue">Mess food issue</option>
      			<option value="Other issue">Other issue</option>
    		</select>
		</div>
		<div class="input-group">
		<label for="description">Problem Description</label>
    	<textarea id="description" name="description" placeholder="Write something.." rows="5" cols="43"></textarea>
    	</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="sub_user">Submit</button>
		</div>
		<p> <a href="a.php?logout='1'" style="color: red;">logout</a> </p>
				
	</form>					
</body>
</html>