<?php 

	session_start();
	
	//intialing variables
	$firstname  ="";
	$lastname ="";
	$regno ="";
	$npassword ="";
	$cpassword ="";
	$email ="";
	$ans ="";
	$sname ="";
	$pname="";
	$smob ="";
	$pmob="";
	$dob="";
	$dept="";
	$comp="";
	$resultss="";
	$regnum="";
	$errors  = array();


	//connect to sdb


	$db= mysqli_connect('localhost','root','','final') or die("could not connect to db");

	//registration comes here;
if(isset($_POST['submit'])){
	$firstname = mysqli_real_escape_string($db,$_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$regno = mysqli_real_escape_string($db, $_POST['regno']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$npassword = mysqli_real_escape_string($db, $_POST['npassword']);
	$cpassword= mysqli_real_escape_string($db, $_POST['cpassword']);
	$ans= mysqli_real_escape_string($db, $_POST['ans']);

	if(empty($firstname)){array_push($errors,"firstname is required");}
	if(empty($lastname)){array_push($errors,"lastname is required");}
	if(empty($regno)){array_push($errors,"regno is required");}
	if(empty($email)){array_push($errors,"email is required");}
	if(empty($npassword)){array_push($errors,"npassword is required");}
	if($npassword != $cpassword){array_push($errors,"cpassword is not matched");}
	if(empty($ans)){array_push($errors,"ans is required");}

//cheaking for user


$user_check="SELECT * FROM `test1` WHERE regno= '$regno' LIMIT 1";

$result =mysqli_query($db,$user_check);
$user = mysqli_fetch_assoc($result);


if($user){
			if($user['regno'] ===$regno){
			array_push($errors,"User Already Exits Please Login");
								}
		}


//registering user


	if(count($errors) == 0){
            echo '$regno';
	$password =md5($npassword);
        echo $regno;
	echo $password;

	$query ="INSERT INTO `test1`(`firstname`, `lastname`, `regno`, `email`, `password`,`ans`) VALUES ('$firstname','$lastname','$regno','$email','$password','$ans')";
	mysqli_query($db,$query);
	$_SESSION['regno'] = $regno;
	$_SESSION['success']= "you are registered in";
	header('location:login basic.php');
}
}

//student login
if(isset($_POST['login'])){


	$regno = mysqli_real_escape_string($db, $_POST['regno']);
	$npassword = mysqli_real_escape_string($db, $_POST['lpassword']);

	if(empty($regno)){array_push($errors,"regno is required");}
	if(empty($npassword)){array_push($errors,"password is required");}


	if(count($errors) == 0)
	{
		$ppassword =md5($npassword);
		
		$query = "SELECT * FROM `test1` WHERE regno='$regno' AND password='$ppassword'";
		$results=mysqli_query($db,$query);
		
		if($results&&mysqli_num_rows($results)>0)
			{$_SESSION['regno'] = $regno;
			 $_SESSION['success'] ="loged in succes";

			 header('location:index.php');
			
			
		}
		else{
			array_push($errors,"not matching creadites");
		}
	}
}




//complainting


if (isset($_POST['give'])) {

  $regnum = mysqli_real_escape_string($db,$_SESSION['regno']);
  $comp = mysqli_real_escape_string($db, $_POST['complaint']);



  if(empty($regnum)){array_push($errors,"regnum is required");}
  if(empty($comp)){array_push($errors,"complaint  is required");}

  if(count($errors) == 0){
    
    $que = "INSERT INTO `complaint`(`regno`,`complaint`) VALUES ('$regnum','$comp')";
    $resultss=mysqli_query($db,$que);
    echo $resultss;
    if ($resultss) {
      echo "<h4>successfully submited complaint</h4>";
    }

  }
  }






//logging out student



if (isset($_POST['logout'])) {

  session_destroy();
  unset($_SESSION['regno']);
  header("location:login basic.php");
}









?>



 