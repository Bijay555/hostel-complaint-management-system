<?php

// get ENUM values String from specified DB table column using my Database Class
// (using substituted table and col names.)
$DB = dbms;
$sql = "SHOW COLUMNS FROM complaint LIKE 'complaint_type'";
$DB->get_data($sql);
while($DB->row = mysql_fetch_array($DB->result_id)) {
	$type = $DB->row["Type"];
}

// format the values
// $type currently has the value of: enum('Equipment','Set','Show')


// ouput will be: Equipment','Set','Show')
$output = str_replace("enum('", "", $type);

 // $output will now be: Equipment','Set','Show
$output = str_replace("')", "", $output);

// array $results contains the ENUM values
$results = explode("','", $output);

// create HTML select object
echo"<select name=\\"the_name\\">\
";

// now output the array items as HTML Options
for($i = 0; $i < count($results); $i++) {
	echo "<option value=\\"$results[$i]\\">$results[$i]</option>\
";
}

// close HTML select object
echo"</select>";
?>


<div class="input-group">
			<label for="complaint_type">Complaint Type</label>
    		<select id="complaint_type" name="complaint_type">
      			<option value="c1">Electricity issue</option>
      			<option value="c2">Carpentry issue</option>
      			<option value="c3">leakage issue</option>
      			<option value="c4">Cleaning/housekeeping issue</option>
      			<option value="c5">Mess food issue</option>
      			<option value="c6">Other issue</option>
    		</select>
		</div>
