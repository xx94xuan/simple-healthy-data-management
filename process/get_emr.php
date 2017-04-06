<?php
//	<p><center><a href="../views/homepage.php">Return homepage</a></center></p>
	session_start();
	$id = $_SESSION['id'];
	$uid = $_SESSION['uid'];

//	$uid = 94126;
//	$id = 2;

	//run python file to get EMR from hospital
	$command = "python ./get_emr.py $uid $id";
	$data = system($command);

//	var_dump($data);



	echo "<p>" .$data. "</p>"

?>
