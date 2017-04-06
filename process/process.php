<?php
	session_start();

	require_once("../sqlconf.php");
	$tbl_name = "user_auth_info";

	//get value form the index(login).php file
	$username = $_POST['user'];
	$password = $_POST['pass'];

	//prevent the sql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

        //get value of id and set session
        $slt = "SELECT id,uid FROM $tbl_name WHERE username='$username'";
        $idrow = mysql_query($slt) or die("cannot get the user id");

//	$suid = "SELECT uid FROM $tbl_name WHERE username='$username'";
//	$uid = mysql_query($suid) or die("cannot get user uid");

	//get id and set session
	$result = mysql_fetch_array($idrow);
        $_SESSION['id'] = $result['id'];
	$_SESSION['uid'] = $result['uid'];

	//query the database for user
	$sql = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password' ";
	$result = mysql_query($sql) or die("cannot query the database!");

	$row = mysql_fetch_array($result);

	$_SESSION['username'] = $username;
//	$_SESSION['uid'] = $uid;

	//confirm the username and password
	if ($row['username']==$username && $row['password']==$password){
		//login success,turn to homepage
		header("Location:../views/homepage.php");
	}else{
//		echo "invalid username or password";
		header("Location:../views/index.php");

	}

?>
