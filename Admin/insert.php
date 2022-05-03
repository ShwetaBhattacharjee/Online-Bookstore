<?php
	require_once("header.php");
	if(isset($_SESSION['useradmin']))
	{
?>
	<div id="container"><br><br><center>
	<img src="img/pencil.jpg" class="rounded-circle" alt="Cinque Terre">


	<!--table database design part -->
	<form action="" method="post" enctype="multipart/form-data">

	<div class="container"><br><br><center>
	<h1>Insert</h1>
<div class="table-responsive">
<table class="table">
<TABLE class="tabledesign"  BORDER=1 
CELLSPACING=1000 CELLPADDING=20>
	<tr>
	<td class="buy3">Enter Book Name</td>
	<td class="buy3"><input class="buy4" type="text" name="bname" placeholder="Enter Book Name"></td>
	</tr>
	<tr>
	<td class="buy3">Enter Book Author</td>
	<td class="buy3"><input  class="buy4" type="text" name="aname" placeholder="Enter Book Author"></td>
	</tr>
	<tr>
	<td class="buy3">Enter Book Publication</td>
	<td class="buy3"><input  class="buy4" type="text" name="publication" placeholder="Enter Book Publication"></td>
	</tr>
	<tr>
	<td  class="buy3">Enter Book Price</td>
	<td class="buy3"><input  class="buy4" type="number" name="price" placeholder="Enter Book Price"></td>
	</tr>
	<tr>
	<td class="buy3">Enter Book Quantity</td>
	<td class="buy3"><input  class="buy4" type="text" name="quantity" placeholder="Enter Book quantity"></td>
	</tr>
	<tr>
	<td class="buy3">Enter Book Description</td>
	<td class="buy3"><input  class="buy4" type="text" name="description" placeholder="Enter Book Description"></td>
	</tr>
	<tr>
	<td class="buy3">Enter Book's Createdate</td>
	<td ><input  class="buy4" type="datetime-local" name="createdate" placeholder="Enter Book's createdate"></td>
	</tr>
	<tr>
	<td class="buy3">Enter Book Catagory</td>
	<td class="buy3">
	<select  class="buy4"name="cat">
	<option>Select</option>
	<option>Adventure</option>
	<option>Biography</option>
	<option>Horror</option>
	<option>kids</option>
	<option>Top Rated Books</option>
	<option>Book Fair Books</option>
	<option>Academic Books</option>
	<option>New Published Books</option>
	<option>Drama</option>
	<option>Fairytale</option>
	<option>Fiction</option>
	<option>Journal</option>
	<option>Religion Books</option>
	<option>Diary</option>
	<option>Poetry</option>
	<option>Travel Books</option>
	<option>Romance</option>
	<option>Comics</option>
	<option>Text Book</option>
	<option>Art</option>
	</select></td>
	</tr>
	<tr>
	<td class="buy3">Enter Book Image</td>
	<td class="buy3"><input type="file" name="img" ></td>
	</tr>
	<tr>
	<td class="buy3"></td>
	<td><input type="submit" name="sub" value="Save"></td>
	</tr>
</table>
</form></div>

<?php
	//$connect=Open();
	/*echo $image=$_FILES["img"]["name"];
	$image_tmp=$_FILES['img']['tmp_name'];
	move_uploaded_file($image_tmp,"../im/$image");
	if(mysqli_query(Open(),"insert into book(Name,Catagory,Price,img) values('$name','$cat','$price','$target_dir')"))
	{
	echo "<script>alert('Data Insert')</script>";
	}
	else
	{
	echo "<script>not alert('Data Insert')</script>";
	}*/
include("../connect.php");

if(isset($_POST['sub']))
	{
	echo $name=$_POST['bname'];
	echo $aname=$_POST['aname'];
	echo	$price=$_POST['price'];
	$publication=$_POST['publication'];
	echo	$cat=$_POST['cat'];
		echo	$description=$_POST['description'];
		echo	$createdate=$_POST['createdate'];
		echo	$quantity=$_POST['quantity'];
	/*$target_dir = "../upload/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file );*/

	$connect=Open();


	echo $image=$_FILES['img']['name'];
	$image_tmp=$_FILES['img']['tmp_name'];
	move_uploaded_file($image_tmp,"../upload/$image");
	if(mysqli_query(Open(),"insert into books(Name,Author,publication,Catagory,Price,description,createdate,quantity,img) values('$name','$aname','$publication','$cat','$price','$description','$createdate','$quantity','$image')"))
	{
	echo '<script type="text/javascript"> alert("Inserted");</script>';
	}
	else
	{
	echo '<script type="text/javascript">alert("Not Insert");</script>';

	}
	}
	}
	else
	{
	header("Location:index.php");
	}
?>
	</table></div>
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