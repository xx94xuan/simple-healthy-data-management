<?php
	session_start();
	$id = $_SESSION['id'];
//	$uid = $_SESSION['uid'];

	require_once("../sqlconf.php");
	$tbl_name = 'user_static_info';

	//get data from static_info_form.php
	$sex = $_POST['gender'];
	$birthday = $_POST['birthday'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	//prevent the sql injection
        $sex = stripcslashes($sex);
        $birthday = stripcslashes($birthday);
	$phone = stripcslashes($phone);
	$email = stripcslashes($email);
	$sex = mysql_real_escape_string($sex);
        $birthday = mysql_real_escape_string($birthday);
        $phone = mysql_real_escape_string($phone);
	$email = mysql_real_escape_string($email);

	//insert value into database
	$date = date("Y-m-d");
	$drop_row = "DELETE FROM $tbl_name WHERE id=$id";
	$sql = "INSERT INTO $tbl_name(id,sex,birthday,phone,email,date) VALUES('$id','$sex','$birthday','$phone','$email','$date')";
	mysql_query($drop_row) or die('cannot delete the old info');
	mysql_query($sql) or die('cannot insert the info');

	//turn to homepage
	header("Location:../views/homepage.php");

?>
































?>
