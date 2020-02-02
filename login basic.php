
<?php include 'server.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:500&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	

	a{
		font-style: italic;
		color:#000000;
	}
 
</style>

</head>
<body>
	<div style="text-align: center">
		
<h2 id="q">Sathyabama Student login</h2>

<br>


<h4 id="q">LOGIN</h4>
<form action="login basic.php" method="POST">
    <?php include('erreo.php') ?>
	<input  type="text" name="regno" placeholder="register number" required>
		<br>
		<br>
		<input type="password" name="lpassword" placeholder="password" required>
		<br>
		<br>
                <button class="button button1"type="submit" name="login">submit</button>
	
</form>
<span><a  id="b" href="final signup.php">Sign up</a></span>
<span><a id="b" href="forget.php">forget password?</a></span>
</div>

</body>
</html>