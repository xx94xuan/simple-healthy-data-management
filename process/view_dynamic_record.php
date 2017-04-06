<?php
	session_start();
	$id = $_SESSION['id'];

        require_once("../sqlconf.php");
        $tbl_name = "user_dynamic_record";

	// sending query
	$result = mysql_query("SELECT * FROM $tbl_name where id=$id");
	if (!$result) {
	    die("Query to show fields from table failed");
	}

	//get the num of columns
	$fields_num = mysql_num_fields($result);

	echo "<table border='1' style='border-collapse:collapse'>";
	echo "<th>height</th><th>weight</th><th>BMI</th><th>date</th>";

	while($row=mysql_fetch_array($result)){
		echo "<tr><td>".$row['height']."</td><td>".$row['weight']."</td><td>".$row['BMI']."</td><td>".$row['date']."</td></tr>";
	}
	echo"</table>";



/*	//display the sql table on the page

	echo "<table border='1'><tr>";
	// printing table headers(column name)
	for($i=0; $i<$fields_num; $i++)
	{
	    $field = mysql_fetch_field($result);
	    echo "<td>{$field->name}</td>";
	}
	echo "</tr>\n";

	// printing table rows(records)
	while($row = mysql_fetch_row($result))
	{
	    echo "<tr>";
	    // $row is array, foreach() puts every element
	    // of $row to $cell variable
	     foreach($row as $cell)
	        echo "<td>$cell</td>";
	    echo "</tr>\n";
	}

	//frees the memory associated with the result
	mysql_free_result($result);

*/

?>
