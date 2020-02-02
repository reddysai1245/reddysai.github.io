<?php include 'admserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>admin home</title>
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

  <div class="r">
    
    <?php if(isset($_SESSION['admin'])) : ?>


 <?php  $_SESSION['admin']; 
      $s=$_SESSION['admin'];?>




      <?php 
         $q="SELECT * FROM `complaint`";
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
  </div>
</body></html>