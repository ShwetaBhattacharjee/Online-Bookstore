<?php

session_start();
include("/connect.php");
$connect=Open();
?>
<?php

$sql = "SELECT * FROM cart " ;
$result =$connect ->query($sql);
if ($result->num_rows > 0){ 

// output data of each row

		while($row = $result->fetch_assoc()) 
		{
			
		  $Id= $row['Id'];
		 
		  $bname=$row['Name'] ;
		  
		  $price=$row['Price'];
		 
		  $img=$row['img'];
		  $quantity=$row['quantity'];
		   
		  
		  
		mysqli_query(Open(),"delete from cart");}}
		session_destroy();
		header("Location:home.php");

?>