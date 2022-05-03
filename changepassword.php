<?php
// Start the session

require_once("header.php");
?>

<div class="container"><br><br><center>


<?php
	include("connect.php");
	if(isset($_POST['change'])){
	    $oldPass=md5($_POST['currentPassword']);
		$connect=Open();
		$sql="SELECT *FROM users

		WHERE email='$_SESSION[email]' and password='$oldPass'";
		$result=mysqli_query($connect,$sql);
		{
		// Return the number of rows in result set
			$count=mysqli_num_rows($result);
			 if($count>0){
			 $error=0;
		if($_POST['password']!=$_POST['cpass'])
		{
			$mispass='<b>Password and Confirmed-Password mismatch.</b>';
			$error=1;
		}	

		if(strlen($_POST['password'])<6)
		{
			$passLength='Password Must be 6 or more than 5 characters.';
			$error=1;
		}	
		if($error>0){
		 echo "<h3 class='title3'>Please Follow the Instruction</h3>";
		}
		else{
			$password=md5($_POST['password']);
			$updatePassword="UPDATE users SET password='$password' WHERE id='$_SESSION[userid]'";
			mysqli_query($connect,$updatePassword);
			echo "<h3 style='color:green;'><b>Successfully update your password</b></h3>";
		}

		 
		 }
		 else
		 {
			 echo "<h3 style='color:brown;'><b>Your given password is invalid.please re-type your current password</b></h3>";
		}}}
?>
<div class="container"><br><br><center>

<h1 class="title1">Change Your Password</h1>

<form action=""method="post">
<div class="table-responsive">
<table class="table">
<TABLE class="tabledesign"  BORDER=0 
CELLSPACING=1000 CELLPADDING=20>
<!-- log in page-->
	<tr>
	<td class="td5"><h3>Current Password</h3></td>
	<td  class="td2"><input  placeholder="Type ur current password" type="password" name="currentPassword"value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>"  required>
	</tr>
	<tr>
	<td  class="td5"><h3>New Password</h3> </td>
	<td class="td2"><input  placeholder="Type Password" type="password" name="password"value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>"  required><b style="color:red"><?php if(isset($mispass)){echo $mispass;} ?>  <br>   <?php if(isset($passLength)){echo $passLength;} ?></b>
	</tr>
	<tr>
	<td  class="td5"><h3>Confirm new Password</h3> </td>
	<td class="td2"><input placeholder="Confirm Password" type="password" name="cpass" id="cpass" value="<?php if(isset($_POST['cpass'])){echo $_POST['cpass'];}?>" required><br></tr>
	<tr>
	<td style="padding-left:100px"></td>
	<td> <input class="btn btn-success" type="submit"  name="change" value="Change">
	</tr>
	</table>
	</table>
	</div></div>
	</form><br><br>
	</center>
	</div>
<?php
require_once("footer.php");
?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>