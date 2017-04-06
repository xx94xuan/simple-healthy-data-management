<?php
	session_start();
	$id = $_SESSION['id'];

	require_once("../sqlconf.php");
	$tbl_name = 'user_medical_record';

	$sql = "SELECT syonptom FROM $tbl_name WHERE id=$id";
	$result = mysql_query($sql) or die("cannot query db table");

	$row = mysql_fetch_array($result);

	$diabetepattern = "(frequernt *urination|increased *thirst|increased *hunger|weight *loss|weak|impaired *vision)";

	if isset($_POST)
		$diabetecount = 0;
		foreach($row as $value)
		{
			$array = preg_match($diabetepattern,$value);
			if $array not null
			{
				$diabetecount = $diabetecount + 1 ;
			}else{
				break;
			}
		}

		if $diabetecount >2
		{
			$message = "You have $diabetecount items of diabete syonptom! ";
		}else{
			$message = "Temporarily without diabete risk.";
		}

		$_SESSION['message'] = $message;

		header("Location:../views/medical_record_form.php");

?>
