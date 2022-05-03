<?php
require_once("header.php");
?>
<div class="container">

<div class="row">
<div class="col-8">
<h3 class="titleadv"><strong>Kid's Books</strong></h3>
<hr class="design">
<div class="row">

<div class="col-sm-12 mt-3 mb-2"  >
<div class="banner1"  >  
<?php
include("/connect.php");
	$c="Kids";
	$sql = "SELECT * FROM books where Catagory like '%$c%'" ;
	$connect=Open();
	$result =$connect ->query($sql);
	if ($result->num_rows > 0) 
	{
	// output data of each row

	while($row = $result->fetch_assoc()) 
		{
		$Id=$row['Id'];
		$name=$row['Name'];
		$price=$row['Price'];
		$img=$row['img'];

		echo '<div class="pic">';
		echo "<a href=' bookimg.php?Id=$Id'><img src='upload/$img',  class='catagories1' '></a>";
		echo '<div class="desc">';	echo "<a href=' bookimg.php?Id=$Id'><h5 class='details'>Details</h5></a>";
		echo '</div>';
		echo '</div>';
		}}
?></div></div>
</div></div>




<div class="col-4"><center>


<?php
require_once("catagory.php");
?></center>
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