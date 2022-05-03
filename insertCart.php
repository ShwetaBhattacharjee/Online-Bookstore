<?php

session_start();
include("/connect.php");
$connect=Open();
$Id=$_GET['Id'];
$name=$_POST['name'];
$price=$_POST['price'];
$img=$_POST['img'];


$quantity=$_POST['qty'];
$product=array($Id,$name,$price,$quantity);
print_r($product);
$_SESSION[$name]=$product;
if(isset($_POST['addcart']))
{


	if(mysqli_query(Open(),"insert into cart(Id,Name,Price,img,quantity) values('$Id','$name','$price','$img','$quantity')"))
			{
			echo '<script type="text/javascript"> alert("Inserted");</script>';
			}
			else
			{
			echo '<script type="text/javascript">alert("Not Insert");</script>';

			}
			}
			header("Location:home.php");
?>

