<?php

require_once("header.php");
if(isset($_SESSION['userid'])){

?>

<div id="container"><br><br><center>
<h1><strong>Profile</strong></h1>
<table class="table">
<TABLE class="tabledesign"  BORDER=0 
CELLSPACING=0 CELLPADDING=20>
		<tr>
		<img src="<?php echo $_SESSION['img']; ?>" id="pro"  class="rounded-circle" alt="Ci Terre"><br><br><br>
		<td class='profile'><h5>Name:</h5></td>
		<td width="300px" height="100px"><?php echo $_SESSION['username'];?></td>
		</tr>
		<tr>
		<td class='profile'><h5>Email:</h5></td>
		<td class='profile'><?php echo $_SESSION['email'];?></td>

		<tr>
		<td class='profile'><h5>Phone Number:</h5></td>
		<td class='profile'><?php echo $_SESSION['phonenumber'];?></td></tr>
		<tr>
		<td class='profile'><h5>Birthdate:</h5></td>
		<td class='profile'><?php echo $_SESSION['birthdate'];?></td>
		</tr>
		<tr>
		<td class='profile'><h5>Gender:</h5></td>
		<td class='profile'><?php echo $_SESSION['gender'];?></td>

		</table>
		<button type="button" class="btn1">
		<a style="text-decoration:none;" href="update.php">Update Your Profile </a> | <a style="text-decoration:none;" href="changepassword.php">Change Password</a>
		</button>
		</center>
		</div><br><br>


<?php
}
else{

header("Location:signin.php");
}

require_once("footer.php");
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>