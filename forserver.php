
<?php

	
	//intialing variables
	
	$regno ="";
	
	$email ="";
	$ans ="";


	$errors  = array();


	//connect to sdb


	$db= mysqli_connect('localhost','root','','final') or die("could not connect to db");


	if (isset($_POST['forget'])) {


	$regno = mysqli_real_escape_string($db, $_POST['regno']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$ans = mysqli_real_escape_string($db, $_POST['ans']);


	if(empty($regno)){array_push($errors,"regno is required");}
	if(empty($email)){array_push($errors,"email is required");}
	if(empty($ans)){array_push($errors,"ans is required");};


	$sq ="SELECT * FROM `test1` WHERE ans ='$ans' AND regno ='$regno' AND email ='$email'";
	$resu = mysqli_query($db,$sq);
	//printf("hello %d",$resu);
		
		if(mysqli_num_rows($resu)){

			$sqll ="DELETE FROM `test1` WHERE ans ='$ans' AND regno ='$regno' AND email ='$email'";
	$result = mysqli_query($db,$sqll);
		
	header("location:final signup.php");
	echo "re-create your profile : )";
	}else{
		echo "profile not found or bad creadits";
	}
}



 ?>