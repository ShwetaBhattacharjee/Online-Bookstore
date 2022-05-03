<?php
session_start();
?>
<?php

include("connect.php");
if(isset($_POST['update']))

{


	echo $username =$_POST['username'];
	echo $email =$_POST['email'];
	echo $phonenumber =$_POST['phonenumber'];

	echo $birthdate =$_POST['birthdate'];
	echo  $gender =$_POST['gender'];




$connect=Open();

$userUpdate="UPDATE `users` SET `username` = '$username',`email` = '$email',`phonenumber` = '$phonenumber',`birthdate` = '$birthdate',`gender` = '$gender' WHERE `users`.`id` = '$_SESSION[userid]'";
if(mysqli_query($connect,$userUpdate))
{   

if(!empty($_FILES['pic']['name'])){
unlink($connect,$_SESSION['img']);

$image="userpic/".$_SESSION['userid'].$_FILES['pic']['name'];
move_uploaded_file($_FILES['pic']['tmp_name'],$image);
$sqlUpdate="UPDATE `users` SET `img` = '$image ' WHERE `users`.`id` = '$_SESSION[userid]'";
mysqli_query($connect,$sqlUpdate);}
$sqlSelect="Select* from users where id='$_SESSION[userid]'";
if ($result=mysqli_query($connect,$sqlSelect))
{
// Return the number of rows in result set
$count=mysqli_num_rows($result);
if($count==1){
$row = $result->fetch_array();

		$_SESSION['userid']=$row['id'];
		$_SESSION['username']=$row['username'];
		$_SESSION['email']=$row['email'];
		$_SESSION['phonenumber']=$row['phonenumber'];
		$_SESSION['password']=$row['password'];
		$_SESSION['birthdate']=$row['birthdate'];
		$_SESSION['gender']=$row['gender'];
		$_SESSION['img']=$row['img'];
	    header("Location:profile.php");


}}
}}


?>
<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/main.css" />

<title>Hello, world!</title>
</head>
<body style="background-image:url('img/registration.jpg');"class="regimg">
<body>

		    <div class="container">
			<div class="regpage">
			<form action="" method="post" enctype="multipart/form-data">
			<div class="row  justify-content-center">
			<div class="col-8">
			<div><h1 class="title4">Update your profile</h1></div>
			<div>
			<p class="title5">Fill up the form with correct values.</p></div>
			 <div><br>
			<label for="username"><b>Username</b></label>
			<input class="form-control" id="username" type="text" name="username" value="<?php echo $_SESSION['username'];?>" required>
			 </div>
			 <div><br>
			<label for="email"><b>Email</b></label>
			<input class="form-control" id="email" type="email" name="email" value="<?php echo $_SESSION['email'];?>"  required>
			 </div>
			 <div><br>
			<label for="phonenumber"><b>Phone Number</b></label>
			<input class="form-control" id="phonenumber" type="text" name="phonenumber" value="<?php echo $_SESSION['phonenumber'];?>"required>
			 </div>
			 
			<div><label for="birthdate"><b>Birthdate</b></label><br>
			<input class="form-control" type="date" id="namebox" name="birthdate" value="<?php echo $_SESSION['birthdate'];?>"  required><br><br></div>
			<div><label for="gender"><b>Gender</b></label><br>
			<input  type="radio" id="r-b" name="gender" value="male" value="<?php echo $_SESSION['gender'];?>" required>Male
			<input type="radio" id="r-b" name="gender" value="female" value="<?php echo $_SESSION['gender'];?>"  required>Female
			<input type="radio" id="r-b" name="gender" value="other" value="<?php echo $_SESSION['username'];?>" required>Other<br><br></div>
			<div><label ><b>Profile Picture</b></label><br><input class="form-control" type="file" name="pic"><br></div>
			<label class="anim">
			<input type="checkbox" class="checkbox" required="">
			<span>I Agree To The Terms & Conditions</span>
			</label><br><br>


			<input class="btn btn-primary" type="submit"  name="update" value="Update">
			<br><hr>
			
			</p>
			</div>	
			</div>
			</form>


</div></div></div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>