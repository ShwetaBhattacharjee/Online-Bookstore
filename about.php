<?php
// Start the session

require_once("header.php");
include("/connect.php");
$connect=Open();
?>
<?php


$sql = "SELECT * FROM description" ;

$result =$connect ->query($sql);
if ($result->num_rows > 0) 
{
// output data of each row

while($row = $result->fetch_assoc()) 
{

		$description=$row['description'];
		$name1=$row['name1'];
		$name2=$row['name2'];
		$id1=$row['id1'];
		$id2=$row['id2'];
		$img1=$row['img1'];
		$about=$row['about'];
		$members=$row['members'];


}}
?>
<body style="background-image:url('img/banner.jpg');"class="regimg">

<div class="container">

<div class="Roundimg">
<center><h1 style="padding-top: 30px;"><?php echo nl2br("$about"); ?></h1>
<p><b ><?php echo nl2br("$members"); ?></b></p></center>
<div class="container"><center>
<div class="row">
<div class="col-sm-6 mt-4 mb-4  " >
<?php echo "<img src='img/$img1'>"?>
<p class="about"><b><?php echo nl2br("Name:$name1");?></b></br>  <p><b ><?php echo nl2br("id:$id1");?></b></p>

</div>



<div class="col-sm-6  mt-4 mb-4 ">

<?php echo "<img src='img/$img1'>"?>
<p class="about"><b><?php echo nl2br("Name:$name2");?></b></br>  <p><b ><?php echo nl2br("id:$id2");?></b></p>


</div>
<h4 class="des"><?php echo nl2br("<div class='desi'>Desccription:<br><br>$description</div>");?></h4>
</div>
</div>

</div>			
</div></div> 
</div></div>


<br><br>

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