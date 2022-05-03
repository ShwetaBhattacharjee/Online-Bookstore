<?php
require_once("header.php");
?>
<div class="container"><br><br><center>
<h1 class="title1">Book List</h1>

<hr class="design">
<div class="row">

<div class="col-sm-12 mt-3 mb-2"  >
<div class="banner1"  > 

<?php
include("/connect.php");
$a="Sunil Gangopadhyay";


$q="SELECT * FROM books where Author Like '%$a%'"  ;
$connect=Open();
$run=mysqli_query($connect,$q);
while($row = mysqli_fetch_array($run)) 
	{$Id=$row['Id'];
	$name=$row['Name'];
	$author=$row['Author'];
	$price=$row['Price'];
	$img=$row['img'];

	echo '<div class="pic">';
	echo "<a href=' bookimg.php?Id=$Id'><img src='upload/$img',  class='catagories1' '></a>";
	echo '<div class="desc">';	echo "<a href=' bookimg.php?Id=$Id'><h5 class='details'>Details</h5></a>";
	echo '</div>';
	echo '</div>';
}
?>	
</center></div></div></div></div>
<?php
require_once("footer.php");
?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
</html>