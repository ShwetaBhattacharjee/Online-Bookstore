<?php
require_once("header.php");
include("../connect.php");
if(isset($_SESSION['useradmin']))
{
?>
<?php
/* EDIT USER */
$connect=Open();
if(isset($_GET['editId'])){
	$editId=$_GET['editId'];
	$sqlEdit="SELECT status FROM users WHERE id='$editId'";
		 $result=mysqli_query($connect,$sqlEdit);
		 $row=mysqli_fetch_array($result);
		if($row['status']=='Active')
		{
			$st='Inactive';
		}
		else {
			
			$st="Active";
		}
		
	$sqlUpdate="UPDATE users SET status='$st' WHERE id='$editId'";
	 $result=mysqli_query($connect,$sqlUpdate);
		
     
}
?>
<?php  
/*DELETE THE USER */
if(isset($_GET['deleteId'])){
	$deleteId=$_GET['deleteId'];
	$sqlDelete="DELETE FROM users WHERE id='$deleteId'";
	 $result=mysqli_query($connect,$sqlDelete);
}

?>

<center>




<?php

		$connect=Open();
$sql = "SELECT * FROM users ORDER BY id DESC";
	 $result=mysqli_query($connect,$sql);
     
  // Return the number of rows in result set
	    $count=mysqli_num_rows($result);
	     if($count>0){
		?>
		<div class="container"><br><br><center>
		<h1>	All users of your Website</h1>
		<div class="table-responsive">
		<table class="table">
<TABLE class="tabledesign"  BORDER=1 
CELLSPACING=1000 CELLPADDING=20>
<tr>
<th class="buy">Id</th>
<th class="buy">Username</th>
<th class="buy">Email</th>
<th class="buy">Phone Number</th>
<th class="buy">Birthdate</th>
<th class="buy">Gender</th>
<th class="buy">Profile Pic</th>
<th class="buy">Status</th>
<th class="buy">Action</th>




</div>

</tr>
		
         <?php  $i=0;
		 while($row = $result->fetch_array())
			  {
				  $i++;?>
				  <tr>
				  <td><?php echo $i ?></td>
				   <td><?php echo $row['username']; ?></td>
				   <td><?php echo $row['email']; ?></td>
				    <td><?php echo $row['phonenumber']; ?></td>
					  <td><?php echo $row['birthdate']; ?></td>
					   <td><?php echo $row['gender']; ?></td>
					  
					  <td><img src="../<?php echo $row['img'];?>    " width ="40" ></td>
					    <td><a href="alluser.php?editId=<?php echo $row['id']?>" ><?php echo $row['status']; ?></td>
					  <td><a href="alluser.php?deleteId=<?php echo $row['id']?>" onClick="return confirm('Do you want to remove this user?');" >Delete</a>  </td>
					  
				  </tr>
				 
		<?php
          	
			  }
			  echo "</table>";
		 }
			  
			  else{
				  
			  echo "<h1>  No User in your websitr </h1>";}
				  
	?>
	<?php
	 }
else
{
	header("Location:index.php");
}
?></table>

</center>
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