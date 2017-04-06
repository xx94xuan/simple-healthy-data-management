<!DOCTYPE html>
<html>
<head>
	<title>Fill in your static info!</title>
	<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
	<div id='frm'>
		<form action='../process/static_info_process.php' method='POST'>
                        <p><dl>
                                <dt><label>Your sex:</label></dt>
				<dd><li>
					<label for="male">Male</label>
					<input type="radio" name="gender" id='male' value='male' checked><br>
				</li>
				<li>
					<label for="female">Female</label>
					<input type="radio" name="gender" id='female' value='female'><br>
				</li></dd>
                        </dl></p>
			<p>
				<label>Your Birthday:</label><br>
				<input type='date' id='birthday' name='birthday' />
			</p>
                        <p>
                                <label>Your phone:</label><br>
                                <input type='text' id='phone' name='phone' />
                        </p>
			<p>
				<label>Your E-mail:</label><br>
				<input type='email' id='email' name='email' />
			</p>
			<p>
				<input type='submit' id='btn' value='Save' />
			</p>
		</form>
		<center><a href="homepage.php">Return</a></center>
	</div>

</body>
</html>
