<?php
include("../connect.php");
$connect=Open();
SESSION_START()


?>
<?php  
/*DELETE THE USER */
if(isset($_GET['deleteId'])){
	
	$deleteId=$_GET['deleteId'];
	$sqlDelete="DELETE FROM books WHERE Id='$deleteId'";
	 $result=mysqli_query($connect,$sqlDelete);
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />

<title>Admin</title>
</head>
<body style="background-image:url(''); "class="background">



<div class="pictures" style="background-image:url('img/black.jpg');">
	
		<div class="container">	
		
		<img class="logo" align='left' src='img/logos2.png'><h1 class="onbook"><strong>The Online Bookstore</strong></font></h1>
		
 

  <div class="row">
    <div class="col-10">
	<form  class="form-inline" action=" " method="post">
		<select  style="width:1000px"class="form-control "   name="a">
		<option >------------Select Catagory-------------</option>
		<option>Adventure</option>
<option>Biography</option>
<option>Horror</option>
<option>kids</option>
<option>Top Rated Books</option>
<option>Book Fair Books</option>
<option>New Published Books</option>
<option>Academic Books</option>
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
			 
		</select></div>
  <div class="col-2"><input class="btn btn-danger" value="ok" type="submit" name="sub" style="width:80px";></div>
	
	  <div class="col-2">
	
  </form>	   
</div></div>
</div></div>
		<!-- nav bar -->

		<nav class="navbar navbar-expand-lg navbar-dark ">
<div class="container">
  
  <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php if(isset($_SESSION['useradmin'])){?>
      <li class="nav-item">
        <a href="adminhome.php"><b><?php echo $_SESSION['useradmin'] ?></b> </a>
      </li>
	   <li class="nav-item">
       <a href="logout.php"><strong>Log out</strong></a>
      </li>
	   <li class="nav-item">
       <a href="alluser.php"><strong>All User</strong></a>
      </li>
	   <li class="nav-item">
        <a href="insert.php"><strong>Insert Books</strong></a>
      </li>
	   <li class="nav-item">
        <a href="list.php"><strong>Books List</strong></a>
      </li>
	  	   <li class="nav-item">
       <a href="order.php"><strong>Order List</strong></a>
      </li>
	  </li>
	  	   <li class="nav-item">
       <a href="customermsg.php"><strong>Customer Message</strong></a>
      </li>
	 <?php
		}
		else
		{
		?>
	 </li> <center>
	  	   <li class="nav-item" >
     <a  align="center" href="index.php">Home</a>
      </li></center>
	   </li>
	  	   
      <?php }			
		?> 
	   
	  	   
      
    </ul></div>
  </div></div>
</nav>
		<div class="container"><br><br><center>
		<h1>Book List</h1>
		<div class="table-responsive">
		<table class="table">
<TABLE class="tabledesign"  BORDER=1 
CELLSPACING=1000 CELLPADDING=20>
<tr>
<th  class="buy">Name</th>
<th  class="buy">Book Id</th>
<th  class="buy">Author</th>
<th  class="buy">Price</th>
<th  class="buy">Catagory</th>
<th  class="buy">Quantity</th>
<th  class="buy">Image</th>
<th    class="buy">Action</th>





</tr>
<?php

		if(isset($_POST['sub']))
		{
		
		$a=$_POST['a'];
		if($a=="Adventure")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>
<tr>
		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					  <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

		}}
else if($a=="Biography")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

}}
else if($a=="Horror")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php
	
}}
else if($a=="kids")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Id']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php
}}
		
else if($a=="Top Rated Books")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php
}}
else if($a=="Book Fair Books")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php
}}
else if($a=="Academic Books")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php
}}
else if($a=="New Published Books")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php
}}
else if($a=="Drama")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>
 <td><?php echo $row['Name']; ?></td>
  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

}}
else if($a=="Fairytale")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

}}
else if($a=="Fiction")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php
	
}}
else if($a=="Journal")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>
 <td><?php echo $row['Name']; ?></td>
  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

}}
else if($a=="Religion Books")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

}}
else if($a=="Diary")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php
	
}}
else if($a=="Poetry")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>
 <td><?php echo $row['Name']; ?></td>
  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

}}
else if($a=="Travel Books")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

}}
else if($a=="Romance")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php
}}
else if($a=="Comics")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>
 <td><?php echo $row['Name']; ?></td>
  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this user?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

}}
else if($a=="Text Book")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>

		 <td><?php echo $row['Name']; ?></td>
		  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php
	
}}
else if($a=="Art")
		{

		$q="SELECT * FROM books where Catagory like '%$a%'" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>
 <td><?php echo $row['Name']; ?></td>
  <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

		}}
		else
		{  $q = "SELECT * FROM books" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{
			
		$name=$row['Name'];
		$price=$row['Author'];
		$price=$row['Price'];
		$cat=$row['Catagory'];  
		}



		$q = "SELECT * FROM books" ;
		$connect=Open();
		$run=mysqli_query($connect,$q);
		while($row = mysqli_fetch_array($run)) 
		{?>
		<td><?php echo $row['Name']; ?></td>
		 <td><?php echo $row['Id']; ?></td>
				   <td><?php echo $row['Author']; ?></td>
				    <td><?php echo $row['Price']; ?></td>
					  <td><?php echo $row['Catagory']; ?></td>
					   <td><?php echo $row['quantity']; ?></td>
					    <td><img src="../upload/<?php echo $row['img'];?>    " width ="40" ></td>
					  <td><a href="list.php?deleteId=<?php echo $row['Id']?>" onClick="return confirm('Do you want to remove this book?');" >Remove Book</a>  </td>
					  
				  </tr>
				 
		<?php

		}}}

?>
</table>

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