<?php include 'server.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<style>

	body{
	background-image: url(https://lh3.googleusercontent.com/proxy/FWOBAVfQYasxV3KURX1VVKem1yOC2iazWAb8csOmqCDwI1CCzAA1zCpnAxR-wL2rbfZNcRHbI5b-SZfLASmF7uhJnzrksBWougEGlkw_-4U=w3840-h2160-p-k-no-nd-mv);
		background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	max-width:100%;
	max-height:100%;
}	

	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<h2 style="text-align: center">Signup</h2>
<div style="text-align: center;">
	<form action="final signup.php" method="POST">
		<?php include('erreo.php') ?>
			<input id="p" type="text" name="firstname" placeholder="firstname" required>
		
		<br>
			<input id="p" type="text" name="lastname" placeholder="lastname" required>
		<br>
			<input id="p" type="email" name="email" placeholder="email" required>
		<br>	
			<input id="p" type="text" name="regno" placeholder="registration number" minlength="8" maxlength="8" pattern="\d{8}" title="enter a valid registration number" required>
		<br>
			<input id="p" type="password" name="npassword" placeholder="new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		<br>
		
			<input id="p" type="password" name="cpassword" placeholder="confirm password" required>
		<br>
		<label>enter your school name? (security question)</label>
		<br>
		<input id="p" type="text" name="ans" placeholder="eg.narayana school">
		<br>
                <button class="button button5" id="p" type="submit" name="submit">submit</button>
	</form>
</div>




</body>
</html>