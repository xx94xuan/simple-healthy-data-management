<?php
	session_start();

	require_once("../sqlconf.php");
	$tbl_name = "user_dynamic_record";

	//get values from the editform.php
	$height = $_POST['height'];
	$weight = $_POST['weight'];

	//prevent the sql injection
	$height = stripcslashes($height);
	$weight = stripcslashes($weight);
	$height = mysql_real_escape_string($height);
	$weight = mysql_real_escape_string($weight);

	//get the user id from the last page
	$id = $_SESSION['id'];

	//calculate the BMI
	$BMI = (float)$weight / ((float)$height * (float)$height)*10000;
//	$BMI = 123;

	//insert values into database
	$date = date("Y/m/d");
	$sql = "INSERT INTO $tbl_name (id,height,weight,BMI,date) values('$id','$height','$weight','$BMI','$date')";
	mysql_query($sql) or die("cannot insert info!");

	header("Location:../views/dynamic_info_form.php");

?>
