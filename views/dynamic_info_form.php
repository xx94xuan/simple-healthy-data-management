<!DOCTYPE html>
<?php
	session_start();
	echo "<center><br><br>Welcome ".$_SESSION['username'].", Please fill in your health info.</center>";
?>
<html>
<head>
	<title>Fill in your info!</title>
	<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
	<div id='frm'>
                <a href="homepage.php">Return</a>

		<form action='../process/dynamic_info_process.php' method='POST'>
			<p>
				<label>Your height/(cm)</label>
				<input type='text' id='height' name='height' />
			</p>
			<p>
				<label>Your weight/(kg)</label>
				<input type='text' id='weight' name='weight' />
			</p>
			<p>
				<input type='submit' id='btn1' value='Add' />
			</p>
		</form>
		<?php include "../process/view_dynamic_record.php"; ?>
		<?php
                        echo "<p>Notes: The normal scope is<br><center>18.5 <= BMI <= 24.9</center></p>";
		?>
	</div>

</body>
</html>
