<?php
// Start the session


require_once("header.php");
?>


<div class="container"><br><br><center>
<h2 class="title"><strong>Admin login</strong></h2>
<img src="img/hr.png" align="center" style="padding:10px;height:100px;  width:100px">
<form action=""method="post">
 
		<div class="table-responsive">
		<table class="table">
<TABLE class="tabledesign"  BORDER=1 
CELLSPACING=1000 CELLPADDING=20>
<!-- log in page-->
<tr>
<td style= "color:white;width="200" height="100"><h3>Uername</h3></td>
<td  width="200" height="50"><input style="width:200px;height:40px;border-radius:20px;" type="text" name="useradmin" placeholder="Enter email"></td>
</tr>
<tr>
<td  style= "color:white;width="200" height="100"><h3>Password</h3> </td>
<td width="200" height="60"><input style="width:200px;height:40px;border-radius:20px;" type="password" name="password" placeholder="Enter Password"></td>
</tr>
<tr>
<td style="padding-left:100px"></td>
<td><input style="width:100px;height:40px;border-radius:20px;"type="submit" name="sub" value="Login"></td>
</tr>
</table>
</table>

</div>
</form>
<?php
	include("connect.php");
if(isset($_POST['sub']))
	{
		$mdpass=md5($_POST['password']);
		$connect=Open();
	$sqlSelect = "SELECT * FROM admin where useradmin='$_POST[useradmin]' and password='$_POST[password]' " ;
	 $result=mysqli_query($connect,$sqlSelect);
     {
  // Return the number of rows in result set
	    $count=mysqli_num_rows($result);
	     if($count==1){
		 $row = $result->fetch_array();

				 $_SESSION['adminId']=$row['id'];
				 $_SESSION['useradmin']=$row['useradmin'];
				 $_SESSION['password']=$row['password'];
				header("Location:adminhome.php");
		
		 
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

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>