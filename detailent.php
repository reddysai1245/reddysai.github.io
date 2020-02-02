<?php include 'admserver.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>detailent</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="detailent.css">
</head>
<body>


<?php if(isset($_SESSION['admin'])) : ?>


<h2 style="text-align: center">
enter details of student</h2>
<div style="text-align: center;">
	<h2><?php echo "welcome ";
	 echo$_SESSION['admin'];?></h2>
	<form action="detailent.php" method="POST">
		<?php include('erreo.php');?>
			<input id="p" type="text" name="sname" placeholder="student name" required>
		
		<br>
			<input id="p" type="text" name="pname" placeholder="parent name" required>
		<br>
			<input id="p" type="email" name="email" placeholder="email of student" required>
		<br>	
			<input id="p" type="text" name="regno" placeholder="registration number" minlength="8" maxlength="8" pattern="\d{8}" title="enter a valid registration number" required>
		<br>
			<input id="p" type="text" name="dept" placeholder="student dept"  required>
		<br>
		
			<input id="p" type="text" name="smob" placeholder="student mobile" required>
		<br>
		
		<br>
		<input id="p" type="text" name="pmob" placeholder="parent mobile">
		<br>
		
		<input id="p" type="date" name="dob" placeholder="dob">
		<br>
                <button class="button button5" id="p" type="submit" name="submitd">submit</button>
               
	</form>



<form action="detailent.php" method="POST">

<button name="home" class="button btn">home page</button>
      <button name="logouta" type="logout" class="button button5">
      logout
      </button></form>
</div>
<?php  endif ?>
</body>
</html>