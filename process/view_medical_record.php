<?php
	session_start();
	$id = $_SESSION['id'];
//	$order = $_SESSION['order'];

        require_once("../sqlconf.php");
        $tbl_name = "user_medical_record";

//	$order="date";
	//select the records for specific id
	$sql = "SELECT * FROM $tbl_name WHERE id=$id";
	$result = mysql_query($sql) or die("Query to show fields from table failed");

	//get the num of the columns
	$fields_num = mysql_num_fields($result);

	//display the records as a table on the page
	echo "<table border='1'><tr>";
	// printing table headers(columns)
	for($i=0; $i<$fields_num; $i++)
	{
		$field = mysql_fetch_field($result);
		echo "<td>{$field->name}</td>";
	}
	echo "</tr>\n";
	// printing table rows(records)
	if($row = mysql_fetch_row($result))
	{
		echo "<tr>";
		// $row is array... foreach( .. ) puts every element
		// of $row to $cell variable
		foreach($row as $value)
			echo "<td>$value</td>";
		echo "</tr>\n";
	}

	//frees the memory associated with the result
	mysql_free_result($result);














	//set var of syonptom patterns of Diabetes 
	$dia_syonptom1 = "/frequent\s*urination/";
	$dia_syonptom2 = "/increased\s*thirst/";
	$dia_syonptom3 = "/increased\s*hunger/";
	$dia_syonptom4 = "/weight\s*loss/";

	//analyze the medical record
	$syonptom_col = mysql_query("SELECT syonptom FROM $tbl_name where id=$id");
	$each_syonptom = mysql_fetch_array($syonptom_col);

	if ($each_syonptom->num_rows > 0) {
		// output data of each row
		while($row = $each_syonptom->fetch_row()) {
			if (preg_match($dia_syonptom1,$row['syonptom'],$matches)){
				$message = "you have a 30% chance of developing diabetes.";
//			echo "<p>".$message ."</p>"
			}
		}
	} else {
//		echo "0 results";
	}

?>
