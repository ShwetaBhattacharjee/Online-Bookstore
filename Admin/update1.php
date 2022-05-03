<?php
session_start();
?>
<?php
	
include("connect.php");
	if(isset($_POST['update']))
	
	{
	
		
	echo $Name =$_POST['Name'];
	echo $Author =$_POST['Author'];
	echo $Price =$_POST['Price'];
	
	echo $Catagory =$_POST['Catagory'];
	
	
       
	
		$connect=Open();
          
		$userUpdate="UPDATE `books` SET `Name` = '$Name',`Author` = '$Author',`Price` = '$Price',`Catagory` = '$Catagory', WHERE `users`.`Id` = '$_SESSION[Id]'";
	  if(mysqli_query($connect,$userUpdate))
	{   
     
	    $count=mysqli_num_rows($result);
	     if($count==1){
		 $row = $result->fetch_array();

				 $_SESSION['Id']=$row['Id'];
				 $_SESSION['Name']=$row['Name'];
				 $_SESSION['Author']=$row['Author'];
				 $_SESSION['Catagory']=$row['Catagory'];
				
				  $_SESSION['img']=$row['img'];
				header("Location:list.php");
		
		 
	 }}
	}
	

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
<body style="background-image:url('img/registration.jpg');background-repeat:no-repeat;height:100%; background-size: cover;color:white"">
<body>


	<form action="" method="post" enctype="multipart/form-data">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Update Your Profile</h1>
					<div>
					<p>Fill up the form with correct values.</p>
					 <div><br>
					<label for="username"><b>Name</b></label>
					<input class="form-control" id="Name" type="text" name="Name" value="<?php echo $_SESSION['Name'];?>">
                     </div>
					 <div><br>
					<label for="email"><b>Author</b></label>
					<input class="form-control" id="Author" type="Author" name="Author" value="<?php echo $_SESSION['Author'];?>">
                     </div>
					 <div><br>
					<label for="phonenumber"><b>Price</b></label>
					<input class="form-control" id="Price" type="text" name="Price" value="<?php echo $_SESSION['Price'];?>">
                     </div>
					 
				<div><label for="birthdate"><b>Catagory</b></label><br>
				<input class="form-control" id="Catagory" type="text" name="Catagory" value="<?php echo $_SESSION['Catagory'];?>">
                     </div>
				<input class="btn btn-primary" type="submit"  name="update" value="Update">
				<br><hr>
  	
			</div>	
		</div>
	</form>

	
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>