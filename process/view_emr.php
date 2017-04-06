<?php
	session_start();
	$id = $_SESSION['id'];

	require_once("../sqlconf.php");
	$tbl_name = "emr";

	$sql = "SELECT * FROM $tbl_name WHERE id=$id";
	$result = mysql_query($sql) or die("cannot query emr");

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
	if($row = mysql_fetch_row($result))
        {
                echo "<tr>";
                foreach($row as $value)
                        echo "<td>$value</td>";
                echo "</tr>\n";
        }

        //frees the memory associated with the result
        mysql_free_result($result);


//	$RECORDID = $row['RECORDID'];
//	$doctor = $row['doctor'];
//	$syonptom = $row['syonptom'];
//	$mediexam = $row['mediexam'];
//	$diagnose = $row['diagnose'];
//	$drug = $row['drug'];
//	$date = $row['date'];

//	echo "RECORDID :".$RECORDID."<br>";
//	echo "syonptom :".$syonptom."<br>";
//	echo "medical examitation	:".$mediexam."<br>";
//	echo "diagnose	:".$diagnose."<br>";
//	echo "drug	:".$drug."<br>";
//	echo "doctor	:".$doctor."<br>";


?>
