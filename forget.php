<?php include 'forserver.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>forget password</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	form{margin: 3%;
			padding-top:4.5%;
		padding-bottom: 4.5%;
		 margin-bottom: 0%;
		
		
	}

	a{
		font-style: italic;
		color:#f5942c;
	}
 
</style>
</head>
<body>
<div style="text-align: center;">
	<h2  id="f">forget password</h2>
	<hr style="border-color:black;">
	<p id="f">enter details for verification and makin new password</p>
	

<form action="forget.php" method="POST">
	<?php include('erreo.php') ?>
	<input id="f" type="text" name="regno" placeholder="registration number" minlength="8" maxlength="8" pattern="\d{8}" title="enter a valid registration number" required>
		
	<br>
		<label id="f">enter your school name (security question)</label>
		<br>
	<br>
	<input id="f" type="text" name="ans" placeholder="ans" required>
	<br>
	<input id="f" type="email" name="email" placeholder="email" required>
	<br>
	 <button class="button button5" id="f" type="submit" name="forget">submit</button>
	</form>
</div>
</body>
</html>