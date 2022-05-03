<?php
require_once("header.php");
?>
<div class="container"><br><br><center>
<h1>Customer Message</h1>
<div class="table-responsive">
<table class="table">
<TABLE class="tabledesign"  BORDER=1 
CELLSPACING=1000 CELLPADDING=20>
<tr>
	<th width="200px" height="50px">Id</th>
	<th width="200px" height="50px">First Name</th>
	<th width="200px" height="50px">Last Name</th>
	<th width="200px" height="50px">Email</th>
	<th width="200px" height="50px">Phone Number</th>
	<th width="200px" height="50px">Message</th>
	</tr></div>
<?php
include("../connect.php");

		$sql = "SELECT * FROM message ORDER  BY Id DESC" ;
		$connect=Open();
		$result =$connect ->query($sql);
		if ($result->num_rows > 0) 
		{
		// output data of each row

		while($row = $result->fetch_assoc()) 
		{

			echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstName"] . "</td><td>"
			. $row["lastName"]."</td><td>" . $row["email"]. "</td><td>" . $row["phonenumber"] . "</td><td>"
			. nl2br($row["msg"]).  "</td><td>";
			}
			echo "</table>";
			} else { echo "0 results"; }
			$connect->close();
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