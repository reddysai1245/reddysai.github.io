<?php include 'server.php';

$db= mysqli_connect('localhost','root','','final') or die("could not connect to db");



 ?>
 <?php if(isset($_SESSION['regno'])) : ?>
 <!DOCTYPE html>
<html>
<head>
	<title>anouncement</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="page1.css">
<style type="text/css">

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
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


 <?php  $_SESSION['regno']; 
      $s=$_SESSION['regno'];?>




      <?php 
         $q="SELECT * FROM `ano`";
       $res=mysqli_query($db,$q);
       $rowcount=mysqli_num_rows($res);
    
      

       for($i=0;$i<$rowcount;$i++)
       {
        $row=mysqli_fetch_row($res);
        echo"<div class='container'>
                <div class='row'>
                    <div class='col'>";
                         echo"<h4>id: ".$row[0]."<h4><br>
                      </div>";
                      echo"<div class='col'><h4>news:".$row[1]." </h4><br></div>
                </div>
              </div>";
              echo "<br>";
       // echo"<div class='mDIV'><button class='btn btn-outline-secondary' type='button' id='formButton'>click here to fetch more</button>";
        
        //echo"<div id='myDIV' class='mDIVC'>";
        }
      ?>

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
<?php  endif ?>
