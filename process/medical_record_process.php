<?php
	session_start();

	require_once("../sqlconf.php");
	$tbl_name = "user_medical_record";

	//get values from the medical_record_form.php
	$syonptom = $_POST['syonptom'];
	$stdate = $_POST['stdate'];
	$endate = $_POST['endate'];
	$doctor = $_POST['doctor'];
	$drug = $_POST['drug'];
	$diagnose = $_POST['diagnose'];
	$order = $_POST['sorted'];

	$_SESSION['order'] = $order;

	//get session id
	$id = $_SESSION['id'];

	//prevent the sql injection
	$syonptom = stripcslashes($syonptom);
	$stdate = stripcslashes($stdate);
	$endate = stripcslashes($endate);
	$doctor = stripcslashes($doctor);
	$drug = stripcslashes($drug);
	$diagnose = stripcslashes($diagnose);
	$order = stripcslashes($order);
	$syonptom = mysql_real_escape_string($syonptom);
	$stdate = mysql_real_escape_string($stdate);
	$endate = mysql_real_escape_string($endate);
	$doctor = mysql_real_escape_string($doctor);
	$drug = mysql_real_escape_string($durg);
	$diagnose = mysql_real_escape_string($diagnose);

	//insert values into database
	$eddate = date("Y-m-d");
	$sql = "INSERT INTO $tbl_name (recordId,id,syonptom,startdate,enddate,doctor,diagnose,drug,date)
		 VALUES('$recordId','$id','$syonptom','$stdate','$endate','$doctor','$diagnose','$drug','$eddate')";
	mysql_query($sql) or die("cannot insert record!");

	header("Location:../views/medical_record_form.php");

?>
