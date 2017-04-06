<?php
	session_start();
	session_destroy();
	echo "<h1>You have been logout success!</h1><p><a href='../views/index.php'>Login again</a><p>";
?>
