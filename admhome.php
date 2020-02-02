<?php include 'admserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin home</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="admh.css">
</head>
<body>

<?php if(isset($_SESSION['admin'])) : ?>
<div class="conta">
	<h4><?php echo "welcome ";
	 echo$_SESSION['admin'];?></h4><br><p>click on option below</p><br>
<ul><div class='container'>
	<div class='row'><a href="detailent.php"><h4>
	<li>add student</li></h4></a></div></div>
	<div class='container'>
	<div class='row'><a href="addnews.php"><h4>
	<li>add news</li></h4></a></div></div>
	<div class='container'>
	<div class='row'><a href="addano.php"><h4>
	<li>add anouncements</li></h4></a></div></div>
	<div class='container'>
	<div class='row'><a href="delano.php"><h4>
	<li>delete anouncements</li></h4></a></div></div>
	<div class='container'>
	<div class='row'><a href="delnews.php"><h4>
	<li>delete news</li></h4></a></div></div>
	<div class='container'>
	<div class='row'><a href="delstu.php"><h4>
	<li>delete student</li></h4></a></div></div>
	<div class='container'>
	<div class='row'><a href="viewc.php"><h4>
	<li>view complaints</li></h4></a></div></div>
</ul>

</div>



<form action="admhome.php" method="POST">
      <button name="logouta" type="logout" class="btn btn-primary">
      logout
      </button></form>
      <?php  endif ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
document.getElementById("formButton").onclick = function() {myFunction()};
function myFunction() {
  document.getElementById("myDIV").classList.toggle("show");
}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>