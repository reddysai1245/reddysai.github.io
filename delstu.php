<?php include 'admserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>delstu</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
		.r{
			margin: 8%;
			padding:8%;
			text-align: center;}
body{
	background-image: url("https://i.stack.imgur.com/jGlzr.png");
}
				</style>
</head>
<body>
<?php if(isset($_SESSION['admin'])) : ?>

<form action="delstu.php" method="POST">
	<?php include('erreo.php') ?>
<div class="r">
	<h5><?php echo "welcome ";
	 echo$_SESSION['admin'];?></h5><br>
<div class="form-group col-md-12">
      <label>enter register number of student to delete profile</label>
      <input type="text" name="id"class="form-control" minlength="8" maxlength="8" pattern="\d{8}" title="enter a valid registration number"required>
    </div>

 <button type="submit" name="delstu" class="btn btn-outline-dark btn-lg">submit</button><br><br></form>
<form action="delstu.php" method="POST">
<button name="home" class="btn btn-outline-success btn-lg">home page</button>
      <button name="logouta" type="logout" class="btn btn-outline-danger btn-lg">
      logout
      </button></div>
  </form>






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