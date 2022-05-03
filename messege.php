<?php
require_once("header.php");

?>

<div class="container">
<div class="row" >
<div class="col-6">
<!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2379.134957210733!2d90.40489490085434!3d23.764890832776256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77decb5f845%3A0xc2eadd2f3b867792!2sAhsanullah%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sbd!4v1600034781975!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>

<!--Google Maps-->
</div>
<div style="padding-left:50px"  class="col-6">








<!--table database design part -->
<form action="" method="post" enctype="multipart/form-data">
<div class="container">

<div class="row">

		<div class="col-12"><div>
		<h2 class="message"><font face="Bold Italic">Give Us Message</font></h2>
		</div>
		<div>
		<label for="username"><b>Enter Your First Name</b></label>
		<input class="form-control"  type="text" name="firstName"  size="50" placeholder="Enter First Name" required>
		</div>
		<div><br>
		<label for="email"><b>Enter your Last Name</b></label>
		<input class="form-control"  type="text" name="lastName"  size="50" placeholder="Enter Last Name"  required>
		</div>
		<div><br>
		<label for="phonenumber"><b>Enter your Email Address</b></label>
		<input class="form-control"  type="email" name="email"  size="50" placeholder="Enter your email here" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"  required>
		</div>
		<div><br>
		<label for="phonenumber"><b>Phone Number:</b></label>
		<input class="form-control" id="phonenumber" type="text" name="phonenumber" placeholder="Enter your phonenumber"  value="<?php if(isset($_POST['phonenumber'])){echo $_POST['phonenumber'];}?>" required>
		</div><div>
		<label for="password"><b>Enter your Meassage Here</b></label>

		<textarea class="form-control"  rows="4" cols="70"  name="msg"  placeholder="Enter Your Message Here"  required ></textarea><br>
		</div>
         <div>
		<input  class="btn btn-success" type="submit" name="sub" value="Send Message">      
		</div></div>
		</form>
<?php

include("connect.php");
if(isset($_POST['sub']))
{
	$error=0;
	
	

	$connect=Open();
	$sqlCheck="SELECT * FROM users where email='$_POST[email]'";
if ($result=mysqli_query($connect,$sqlCheck))
{
// Return the number of rows in result set
$count=mysqli_num_rows($result);
	if($count>0){
		$error=0;}
		else{
		$exist="<b>Don't have any account with this email.please Try another on or</b><button class='btn btn-success'><a href='registration.php'>Sign Up</a></button>";
		echo "<center><h5 style='color:red;'>".$exist."</h5></center>";
		$error=1;
		}}
		if( !preg_match("/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/i", $_POST['phonenumber']) ) {
	    $misphn="<b>Invalid Phone Number</b>";
		echo "<center><h5 style='color:red;'>".$misphn."</h5></center>";
		$error=1;}
		
	if($error==0){



		$firstName =$_POST['firstName'];
		$lastName =$_POST['lastName'];
		$email =$_POST['email'];
		$phonenumber =$_POST['phonenumber'];

		$msg =$_POST['msg'];



		$connect=Open();


	if(mysqli_query(Open(),"insert into message(firstName,lastName,email,phonenumber,msg) values('$firstName','$lastName','$email','$phonenumber','$msg')"))
	{
	  echo '<script type="text/javascript"> alert("Message Sent Successfully");</script>';

	}
	else
	{
	  echo '<script type="text/javascript">alert("Message Not Sent");</script>';

	}

	}}

	?></div></div></div>

</div></div><br><br>
</center>

<?php
require_once("footer.php")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>