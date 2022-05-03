<?php


session_start();
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

<title>Cart</title>
</head>
<div class="container">
<center><h1 class="shop"> Shopping Site </h1>

<center>
<a href="home.php" class="btn btn-warning col-lg-2">Home</a>
<a href="viewcart.php" class="btn btn-warning col-lg-2">Cart</a></center>
<br><br>
<h2 align="center">Your Cart Products </h2>
<div class="table-responsive">
<table class="table">

	<thead>
	<tr>

	<th>Serial No</th>
	<th>Id</th>
	<th>Name</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Total Price</th>
	<th>Update</th>
	<th>Delete</th>


	</tr></thead><tbody></div>
<?php
$total = 0;
$bill=0;
$sno=1;
foreach((array)$_SESSION as $products){

	$p=0;
	$q=0;
	$id=0;
	echo "<tr>";
	echo "<td>".($sno++)."</td>";
	echo "<form action='editCart.php' method='POST'>";

foreach((array)$products as $key => $value)
{
if( $key ==3){
		echo "<td> <input type='text' name='name$key' class='form-control' value='".$value."'></td>";
		$q=$value;
}
else if($key==2){
		echo "<input type='hidden' name='name$key'  value='".$value."'>";
		echo  "<td> " .$value. "</td>";
		$p=$value; 
}
else if($key==1){
		echo "<input type='hidden' name='name$key'  value='".$value."'>";
		echo  "<td> " .$value. "</td>";
	
}
else if($key==0){
		echo "<input type='hidden' name='name$key'  value='".$value."'>";
		echo  "<td> " .$value. "</td>";
		$id= $value;
	 
}

}

$bill=($q*$p);

echo  "<td> " .$bill. "</td>";
echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
$associativeArray[$id] = $q;
echo "</tr>";
echo "</form>";	
$total = $total + $bill;
$_SESSION["quantity"]=$associativeArray;
}



?>
</tbody>

			<tr>
				<td colspan="4" align="right">Total</td>
				<td align="right">$ <?php echo number_format($total, 2); ?></td>
				<td></td>
			</tr>
			

</table>
<?php 
//print_r($associativeArray);

?>

<a style="margin-right:50px"href="bookimg2.php" class ='btn btn-warning'> Checkout </a>

<a style="margin-right:50px" href="home.php" class ='btn btn-warning'> Continue Shopping </a>
<a style="margin-right:50px" href="clear.php" class ='btn btn-warning'> Clear </a>
</center>