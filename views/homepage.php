<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
        <link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
	<div id='frm1'>
		<center>Home page</center>
		<?php
			echo '<p><a href="../process/logout_process.php">Logout</a></p>';
		?>
		<h1>Basic information</h1>

		<?php include "../process/homepage_process.php";?>

		<p><?php
			echo '<a href="static_info_form.php">Complete your personal infos</a>';
		?></p>

                <h1>Health And Medical</h1>
                <?php
                        echo '<p><a href="dynamic_info_form.php">Fill in & view your health records</a></p>
			<p><a href="medical_record_form.php">Fill in & view your medical records</a></p>';
		?>

		<h1>EMR </h1>
		<?php
			echo '<p><a href="./view_emr_page.php">View EMRs</a></p>
			<p><a href="../process/get_emr.php">Get the EMR from hosiptal</a></p>';
                ?>

	</div>
</body>
</html>
