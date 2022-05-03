<?php
require_once("header.php")
?>
<?php

//$connect=Open();
	/*echo $image=$_FILES["img"]["name"];
	$image_tmp=$_FILES['img']['tmp_name'];
	move_uploaded_file($image_tmp,"../im/$image");
if(mysqli_query(Open(),"insert into books(Name,Catagory,Price,img) values('$name','$cat','$price','$target_dir')"))
{
	echo "<script>alert('Data Insert')</script>";
}
else
{
	echo "<script>not alert('Data Insert')</script>";
}*/
include("connect.php");
if(isset($_POST['sub']))
{
	$error=0;
if($_POST['password']!=$_POST['cpass'])
{
	$mispass='Password and Confirmed-Password mismatch.';
	$error=1;
}	


if(strlen($_POST['password'])<6)
{
	$passLength='Password Must be 6 or more than 5 characters.';
	$error=1;
}
if( !preg_match("/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/i", $_POST['phonenumber']) ) {
	$misphn='Enter Valid Phone Number';
	$error=1;
}	

	$connect=Open();
	$sqlCheck="SELECT * FROM users where email='$_POST[email]'";
 if ($result=mysqli_query($connect,$sqlCheck))
 {
// Return the number of rows in result set
	$count=mysqli_num_rows($result);
	 if($count>0){
		$exist="<b>Already have account for this email.please Try another on or</b><a href='signin.php'>Login</a>";
		echo "<center><h5 style='color:red;'>".$exist."</h5></center>";
		$error=1;
		}}
if($error==0){
	$mdpass=md5($_POST['password']);
	echo $username =$_POST['username'];
	echo $email =$_POST['email'];
	echo $phonenumber =$_POST['phonenumber'];
	echo $password =$mdpass;
	echo $birthdate =$_POST['birthdate'];
	echo  $gender =$_POST['gender'];



	$connect=Open();

	$sql="insert `users` SET `username` = '$username',`email` = '$email',`phonenumber` = '$phonenumber',`password` = '$password',`birthdate` = '$birthdate',`gender` = '$gender',`status` = 'Active'";
  if(mysqli_query($connect,$sql))
{   
	echo $lastId= ($connect->insert_id);
			 
	$image="userpic/".$lastId.$_FILES['pic']['name'];
	move_uploaded_file($_FILES['pic']['tmp_name'],$image);
	$sqlUpdate="UPDATE `users` SET `img` = '$image ' WHERE `users`.`id` = '$lastId'";
	mysqli_query($connect,$sqlUpdate);
	$sqlSelect="Select* from users where id='$lastId'";
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
				$_SESSION['gender']=$row['genderS'];
				$_SESSION['img']=$row['img'];
				header("Location:profile.php");

		 
 }}
}}}


?>

<body style="background-image:url('img/banner.jpg');"class="regimg">

<div class="container">
<div class="regpage">
<form action="" method="post" enctype="multipart/form-data">
	
		
					<div class="row  justify-content-center">
					<div class="col-8">
					<div><h1 class="title4">Registration</h1></div>
					<div>
					<p class="title5">Fill up the form with correct values.</p></div>
					<div >
					<label for="username"><b>Username:</b></label>
					<input class="form-control" id="username" type="text" name="username" placeholder="Enter your Username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" required>
					</div>
					<div><br>
					<label for="email"><b>Email:</b></label>
					<input class="form-control" id="email" type="email" name="email" placeholder="Enter your email"  value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"  required>
					</div>
					<div><br>
					<label for="phonenumber"><b>Phone Number:</b></label>
					<input class="form-control" id="phonenumber" type="text" name="phonenumber" placeholder="Enter your phonenumber"  value="<?php if(isset($_POST['phonenumber'])){echo $_POST['phonenumber'];}?>" required><b style="color:red"><?php if(isset($misphn)){echo $misphn;} ?>  <br></b>
					</div>
					<div><br>
					<label for="password"><b>Password:</b></label>
					<input class="form-control" id="password" type="password" name="password" placeholder="Enter your Password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>"  required><b style="color:red"><?php if(isset($mispass)){echo $mispass;} ?>  <br>   <?php if(isset($passLength)){echo $passLength;} ?></b>
					</div><div>
					<label for="retype"><b>Confirm Password:</b></label><br></div>
					<input class="form-control" id="cpass" placeholder="Confirm Password" type="password" name="cpass"  value="<?php if(isset($_POST['cpass'])){echo $_POST['cpass'];}?>" required><br>
					<div><label for="birthdate"><b>Birthdate:</b></label><br>
					<input class="form-control" type="date" id="namebox" name="birthdate" value="<?php if(isset($_POST['birthdate'])){echo $_POST['birthdate'];}?>"  required><br><br></div>
					<div><label for="gender"><b>Gender</b></label><br>
					<input type="radio" id="r-b" name="gender" value="male" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" required>Male
					<input type="radio" id="r-b" name="gender" value="female" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>"  required>Female
					<input type="radio" id="r-b" name="gender" value="other" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" required>Other<br><br></div>
					<div><label ><b>Profile Picture</b></label><br><input class="form-control" type="file" name="pic"><br></div>
					<label class="anim">
					<input type="checkbox" class="checkbox" required="">
					<span>I Agree To The Terms & Conditions</span>
					</label><br><br>

					<input class="btn btn-primary" type="submit"  name="sub" value="Sign Up">
					<br><hr>
					<b>Already a member?</b> <button type="button" class="btn btn-primary"><a href="signin.php">Sign in</a></button><br><br>



					</div>	
					</div>
					</form></div>

</div><br>
<?php
require_once("footer.php");
?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>