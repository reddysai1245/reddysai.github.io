<?php include 'server.php';


$db= mysqli_connect('localhost','root','','final') or die("could not connect to db");



 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>complaint</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="page1.css">
<style type="text/css">
textarea{
  width: 60%;
  
}

input{
  width: 20%;
  border-top-right-radius:  7%;
}
}
.mDIV{
  display: inline-block;
}
.mDIVC{ 
display: none;}
.show{display: block;}
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuhSHBcJhXbieeECKy3qQkeHw5aY-Ap8Oxn_Uel718hEyM5fy8" width="120" height="60" class="d-inline-block align-top" alt="sathyabama">
    
  </a></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="anouncements.php">anouncements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news.php">news</a>
      </li>

             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          acadamics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="timetable.php">time table</a>
          <a class="dropdown-item" href="http://www.sathyabama.ac.in/classnotes_list.php">e-liblary</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://www.sathyabama.ac.in/result.php">result</a>
          <a class="dropdown-item" href="http://www.sathyabama.ac.in/arrearfees_home.php">arrer fee</a>
          <a class="dropdown-item" href="complaint.php">complaint</a>
          
        </div>
      </li>
    </ul>
      <span class="navbar-text"><form action="index.php" method="POST">
      <button name="logout" type="logout" class="btn btn-outline-secondary">
      logout
      </button></form></span>
  </div>
</nav>
<!-- end of nav-->


<br>
<br>
<br>
<br>
<br>
<?php if(isset($_SESSION['regno'])) : ?>

 
<div style="text-align: center;">
<form action="complaint.php" method="POST">
    <?php include('erreo.php') ?>
  
    
    
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
    <div class="form-group shadow-textarea">
  <h4>complaint here</h4>
  <textarea class="form-control z-depth-1"  rows="6" type="text" name="complaint" placeholder="complaint"></textarea>
</div></div></div>
<div class="col-lg-2"></div>
    <br>
    <br>
                <button type="submit" class="btn btn-outline-danger" name="give">submit</button>
  
</form>

</div>






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
