<?php
require_once("header.php");
include("connect.php");
echo '<pre>';
//var_dump($_SESSION);
//echo $_SESSION["quantity"]["93"];
echo '</pre>';


?>
<div class="container">

<div class="row ">
<div class="col-8">
<h3 class="titleadv"><strong> Books</strong></h3>
<hr class="design">
<div class="row ">

<div class="col-sm-12 mt-3 mb-2"  >
<div class="banner1"  >  
<?php

/* CODE FOR BOOK UPDATE START*/
		$sql = "SELECT * FROM books" ;
		$connect=Open();
		$result =$connect ->query($sql);
		//print_r($_SESSION["quantity"]);
		if(!empty($_SESSION["quantity"]))
		{
		 if ($result->num_rows > 0) 
		{
		// output data of each row

		  while($row = $result->fetch_assoc()) 
		{

		//$Id= $row['Id'];
		   foreach ((array)$_SESSION["quantity"] as $id => $value)
			{  
			  if ($row['Id'] == $id)
			   {
					$row_id=$row['Id'];
					$value=$row['quantity'] - $value;

					$sql = "UPDATE books set quantity='$value' where Id='$row_id'" ;
					$connect=Open();
						if($connect ->query($sql)===TRUE)
						{
						//echo  "SUCCESS";
						}

						}
				  
			}
			}
			}

			$_SESSION["quantity"]="";
			}



			/* CODE FOR BOOK UPDATE END*/

			$sql = "SELECT * FROM cart " ;
			$connect=Open();
			$result =$connect ->query($sql);
			if ($result->num_rows > 0) 
			{
			// output data of each row

			 while($row = $result->fetch_assoc()) 
			{

				$Id= $row['Id'];

				$bname=$row['Name'] ;

				$price=$row['Price'];

				$img=$row['img'];
				$quantity=$row['quantity'];



			echo "<a href=' bookimg.php?Id=$Id'><img src='upload/$img', style= 'padding:10px;height:300px;  width:200px''></a>";


?>

<?php }}?>
<form action="" method="post">
<div class="container"><br><br>
<h1 class="title">Buy</h1>
<table class="table">
<TABLE class="tabledesign"  BORDER=1 
CELLSPACING=1000 CELLPADDING=20>
<tr >
<td  class="booktd2">Name</td>
<td class="booktd2"><input type="text" name="name1" placeholder="Enter Name" title="Enter Name" Required></td>
</tr>
<tr>
<td  class="booktd2">Address</td>
<td class="booktd2"><input type="text" name="address" placeholder="Enter Addresse" title="Enter Name" Required></td>
</tr>
<tr>
<td  class="booktd2">City</td>
<td class="booktd2"><input type="text" name="city" placeholder="Enter City" title="Enter City" Required></td>
</tr>
<tr>
<td class="booktd2">Payment Method</td>
<td class="booktd2">
<select class="booktd1" name="payment">
<option>Select</option>
<option>Cash</option>
<option>bKash</option>
<option>Rocket</option>


</select></td>
</tr>
<tr>
<td  class="booktd2">Phone Number</td>
<td class="booktd2"><input type="text" name="phn" placeholder="Enter Phone Number" title="Enter Phone Number" Required></td>
</tr>
<tr>
<td  class="booktd2">Email</td>
<td class="booktd2"><input type="text" name="email" placeholder="Enter Email Address" title="Enter Email Address" Required></td>
</tr>
<tr>
<td  class="booktd2">Pin Code</td>
<td class="booktd2"><input type="text" name="code" placeholder="Enter Pin Code" title="Enter Pin Code" Required></td>
</tr>
<tr>
<th></th><td><input type="submit" name="sub" value="Buy Now"  class="btn btn-success"></td>
</tr></table>
</form>
<?php 
if(isset($_POST['sub']))
{      


echo $name1=$_POST['name1'];
echo	$address=$_POST['address'];
echo	$city=$_POST['city'];
echo $payment=$_POST['payment'];
echo $phn=$_POST['phn'];
echo	$email=$_POST['email'];
echo	$code=$_POST['code'];



if(mysqli_query(Open(),"insert into selling(bname,bid,quantity,name1,city,payment,address,phn,email,code) values('$bname','$Id','$quantity','$name1','$city','$payment','$address','$phn','$email','$code')"))

{

mysqli_query(Open(),"INSERT INTO orders(OrderId,BookId,BookName,CustomerName,CustomerCity,Payment,CustomerAddress,CustomerPhn,CustomerEmail,Code)
SELECT  selling.OrderId,cart.Id,cart.Name,selling.name1,selling.city,selling.payment,selling.address,selling.phn,selling.email,selling.code FROM cart,selling");

mysqli_query(Open(),"delete from cart");
mysqli_query(Open(),"delete from selling");
header("Location:thanks.php");
}
else
{
echo '<script type="text/javascript">alert("Something is wrong");</script>';

}
}
?>
</div>
<!--<a href="bookimg2.php?Id=<?php Open();echo $Id;?>"  style="width:200px;height:50px;padding:10px;background-color:blue;">Buy Now</a>
-->
</div></div>
</div></div>




<div class="col-4"><center>


</center>
</div></div></div>
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