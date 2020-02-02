
<?php include 'admserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="logina.css">
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
		
<h2 id="q">Sathyabama  Admin Portal</h2>

<br>


<h4 id="q">LOGIN</h4>
<form action="login admin.php" method="POST">
    <?php include('erreo.php') ?>
	<input  type="text" name="admin" placeholder="id number" required>
		<br>
		<br>
		<input type="password" name="lpassword" placeholder="password" required>
		<br>
		<br>
                <button class="button button1"type="submit" name="adminl">submit</button>
	
</form>


</div>

</body>
</html>