<?php
// Start the session


require_once("header.php");
?>


<div class="container"><br><br><center>
<h2 class="admin" ><strong>Admin login</strong></h2>
<img src="img/hr.png" align="center" style="padding:10px;height:100px;  width:100px">
<form action=""method="post">
<div class="table-responsive">
<table class="table">
<TABLE class="tabledesign"  BORDER=0 
CELLSPACING=1000 CELLPADDING=20>
<!-- log in page-->
		<tr>
		<td class="td6"><h3>Email</h3></td>
		<td  class="td2"><input class="input" type="email" name="email" placeholder="Enter email"></td>
		</tr>
		<tr>
		<td  class="td6"><h3>Password</h3> </td>
		<td class="td2"><input class="input" type="password" name="password" placeholder="Enter Password"></td>
		</tr>
		<tr>
		<td style="padding-left:100px"></td>
		<td><input  class="input1" type="submit" name="sub" value="Login"></td>
		</tr>
		</table>
		</table>
		<p>
		<b>Not yet a member?</b> <button type="button" class="btn1"><a href="registration.php">Sign up</a><br></button><br>
		<button type="button" class="btn1"><a href="reset-password.php">Forget Your Password?</a><br></button>
		</p>


</div>
</form>
<?php
include("connect.php");
if(isset($_POST['sub']))
{
$mdpass=md5($_POST['password']);
$connect=Open();
$sqlSelect = "SELECT * FROM users where email='$_POST[email]' and password='$mdpass' and status='Active'" ;
$result=mysqli_query($connect,$sqlSelect);
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


	}
else
{
     echo "<h3 style='color:brown;'>Login Failed,Please try again</h3>";
}}}

?>
</center>
</div>

<?php
require_once("footer.php");
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>