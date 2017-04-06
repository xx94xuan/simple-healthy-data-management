<!DOCTYPE html>
<?php
	session_start();
	echo $_SESSION['username']."'s medical record";
?>
<html>
<head>
	<title>medical record</title>
</head>
<body>
	<div>
		<form action='../process/choose_sort_process.php method='POST'>
			<p>
				<label>Sorted by: </label>
				<li>
					<label for='date'>date</label>
					<input type='radio' name='choice' id='date' value='date'><br>
				</li>
				<li>
					<label for='doctor' name='doctor'><br>
					<input type='radio' name='choice' id='doctor' value='doctor'><br>
				</li>
				<li>
		</form>

	</div>
	<div>
		<><>


</body>
</html>
