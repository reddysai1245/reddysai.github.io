<?php 

	session_start();


$regno ="";
$npassword ="";
$sname ="";
	$pname="";
	$smob ="";
	$pmob="";
	$dob="";
	$dept="";
	$email ="";
	$id="";
	$news="";
	$ano="";
	$idn="";
	$newsn="";
	$errors  = array();


$db= mysqli_connect('localhost','root','','final') or die("could not connect to db");


	if(isset($_POST['adminl'])){


	$regno = mysqli_real_escape_string($db, $_POST['admin']);
	$npassword = mysqli_real_escape_string($db, $_POST['lpassword']);

	if(empty($regno)){array_push($errors,"regno is required");}
	if(empty($npassword)){array_push($errors,"password is required");}


	if(count($errors) == 0)
	{
		$ppassword =md5($npassword);
		
		$query = "SELECT * FROM `admin` WHERE id='$regno' AND password='$ppassword'";
		$results=mysqli_query($db,$query);
		
		if($results>0)
			{$_SESSION['admin'] = $regno;
			 $_SESSION['success'] ="loged in succes";
			 $s=$_SESSION['admin'];
			 header('location:admhome.php');
			
			
		}
		else{
			array_push($errors,"not matching creadites");
		}
	}
}


if(isset($_POST['submitd'])){
	$sname = mysqli_real_escape_string($db,$_POST['sname']);
	$pname = mysqli_real_escape_string($db, $_POST['pname']);
	$regno = mysqli_real_escape_string($db, $_POST['regno']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$smob  =  mysqli_real_escape_string($db, $_POST['smob']);
	$pmob= mysqli_real_escape_string($db, $_POST['pmob']);
	$dob= mysqli_real_escape_string($db, $_POST['dob']);
	$dept=mysqli_real_escape_string($db,$_POST['dept']);

	if(empty($sname)){array_push($errors,"sname is required");}
	if(empty($pname)){array_push($errors,"pname is required");}
	if(empty($regno)){array_push($errors,"regno is required");}
	if(empty($email)){array_push($errors,"email is required");}
	if(empty($smob)){array_push($errors,"smob is required");}
	if(empty($pmob)){array_push($errors,"pmob is not matched");}
	if(empty($dob)){array_push($errors,"dob is required");}

		$user_check="SELECT * FROM `detais` WHERE regno= '$regno' LIMIT 1";

$result =mysqli_query($db,$user_check);
$user = mysqli_fetch_assoc($result);


if($user){
			if($user['regno'] ===$regno){
			array_push($errors,"regno Already Exits Please check in db");
								}
		}

	if(count($errors) == 0){
            
	$password =md5($npassword);
        

	$query ="INSERT INTO `detais`(`name`, `regno`, `dept`, `email`, `dob`, `mob`, `parent name`, `pmob`) VALUES ('$sname','$regno','$dept','$email','$dob','$smob','$pname','$pmob')";
	$res=mysqli_query($db,$query);
}
}


if (isset($_POST['logouta'])) {

  session_destroy();
  unset($_SESSION['regno']);
  header("location:login admin.php");
}

if (isset($_POST['home'])) {

 
  header("location:admhome.php");
}

if(isset($_POST['submitnew'])){

  $id = mysqli_real_escape_string($db, $_POST['id']);
	$news = mysqli_real_escape_string($db, $_POST['news']);

	if(empty($id)){array_push($errors,"id is required");}
	if(empty($news)){array_push($errors,"news is required");}

		$user_check="SELECT * FROM `news` WHERE id= '$id' LIMIT 1";

$result =mysqli_query($db,$user_check);
$user = mysqli_fetch_assoc($result);


if($user){
			if($user['id'] ===$id){
			array_push($errors,"id Already Exits Please give new id");
								}
		}


if(count($errors) == 0){

	$query="INSERT INTO `news` VALUES('$id','$news')";
	$res=mysqli_query($db,$query);
	if ($res) {
		echo"<h4>successfully inserted</h4>";
	}
}


}

if(isset($_POST['submitano'])){

$id = mysqli_real_escape_string($db, $_POST['id']);
	$ano = mysqli_real_escape_string($db, $_POST['ano']);

	if(empty($id)){array_push($errors,"id is required");}
	if(empty($ano)){array_push($errors,"ano is required");}


	$user_check="SELECT * FROM `ano` WHERE id= '$id' LIMIT 1";

$result =mysqli_query($db,$user_check);
$user = mysqli_fetch_assoc($result);


if($user){
			if($user['id'] ===$id){
			array_push($errors,"id Already Exits Please give new id");
								}
		}

if(count($errors) == 0){

	$query="INSERT INTO `ano` VALUES('$id','$ano')";
	$res=mysqli_query($db,$query);
	if ($res) {
		echo"<h4>successfully inserted</h4>";
	}
}

}

if(isset($_POST['delano'])){

$id = mysqli_real_escape_string($db, $_POST['id']);

	if(empty($id)){array_push($errors,"id is required");}

if(count($errors) == 0){
$query="DELETE FROM `ano` WHERE id='$id'";
$res=mysqli_query($db,$query);

echo "successfully deleted";}

}



if(isset($_POST['delnews'])){

$id = mysqli_real_escape_string($db, $_POST['id']);

	if(empty($id)){array_push($errors,"id is required");}

if(count($errors) == 0){
$query="DELETE FROM `news` WHERE id='$id'";
$res=mysqli_query($db,$query);
echo "successfully deleted";}
}


if(isset($_POST['delstu'])){

         $id = mysqli_real_escape_string($db, $_POST['id']);

	if(empty($id)){array_push($errors,"register number is required");}

         if(count($errors) == 0){
          $query="DELETE FROM `detais` WHERE regno='$id'";
$res=mysqli_query($db,$query);

echo "<h4>deleted</h4>";
}
}

?>