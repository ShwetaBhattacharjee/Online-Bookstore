<?php
require_once("header.php");
if(isset($_SESSION['useradmin']))
{
?>
<div class="container"><br><br><center>
<h1>Order List</h1>
<div class="table-responsive">
<table class="table">
<TABLE class="tabledesign"  BORDER=1 
CELLSPACING=1000 CELLPADDING=20>
		<tr>

		<th  class="buy">Order Id</th>
		<th  class="buy">Book Id</th>
		<th  class="buy">Book Name</th>
		<th  class="buy">Customer Name</th>
		<th  class="buy">Customer City</th>
		<th  class="buy">Payment</th>
		<th  class="buy">Customer Address</th>
		<th  class="buy">Customer Phone No</th>
		<th  class="buy">Customer Email</th>
		<th  class="buy">Pin Code</th>



		</tr>
<?php
include("../connect.php");

$sql = "SELECT * FROM orders  ORDER  BY orderId DESC" ;
$connect=Open();
$result =$connect ->query($sql);
	if ($result->num_rows > 0) 
	{
	// output data of each row

	while($row = $result->fetch_assoc()) 
	{

			echo "<tr><td>" .  $row["OrderId"] . "</td><td>". $row["BookId"]."</td><td>". $row["BookName"]."</td><td>"
			. $row["CustomerName"]."</td><td>" . $row["CustomerCity"]. "</td><td>" . $row["Payment"] . "</td><td>". $row["CustomerAddress"]."</td><td>"
			. $row["CustomerPhn"].  "</td><td>" . $row["CustomerEmail"] . "</td><td>"
			. $row["Code"].  "</td></tr>";
			}
			echo "</table>";
			} else { echo "0 results"; }
			$connect->close();
			}
			else
			{
			header("Location:index.php");
			}
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