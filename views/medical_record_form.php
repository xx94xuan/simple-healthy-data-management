<!DOCTYPE html>
<?php session_start();
	$message = $_SESSION['message'];
?>
<html>
<head>
	<title>Medical records</title>
	<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
	<div id='frm1'>
	<?php
		session_start();
		echo "<center>Hi, ".$_SESSION['username'].".Edit your medical form!</center> ";
	?>
		<p><a href="homepage.php">Return</a></p>
		<form action='../process/medical_record_process.php' method='POST'>
			<p>
				<label>Syonptom </label><br>
				<input type='text' id='syonptom' name='syonptom' />
			</p>
			<p>
				<label>Start date </label><br>
				<input type='date' id='stdate' name='stdate' />
			</p>
			<p>
				<label>End date </label><br>
				<input type='date' id='endate' name='endate' />
			</p>
			<p>
				<label>Doctor </label><br>
				<input type='text' id='doctor' name='doctor' />
			</p>
			<p>
				<label>Diagnose </label><br>
				<input type='text' id='diagnose' name='diagnose' />
			</p>
                        <p>
                                <label>Drug </label><br>
                                <input type='text' id='drug' name='drug' />
                        </p>
			<p>
				<input type='submit' id='btn1' value='Save' />
			</p>
		</form>
			<?php include "../process/view_medical_record.php"; ?>
	</div>

</body>
</html>
