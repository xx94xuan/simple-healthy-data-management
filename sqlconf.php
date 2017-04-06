<?php
	$GLOBALS['host'] = "localhost";
	$GLOBALS['db_name'] = "family";
	$GLOBALS['db_username'] = "root";
	$GLOBALS['db_password'] = "xx123456";

	//connect to server and select database
	mysql_connect($host,$db_username,$db_password) or die("cannot connect!");
        mysql_select_db($db_name) or die("cannot select database!");

?>
