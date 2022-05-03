<?php
require_once("header.php");
include("/connect.php");
$connect=Open();

?>
<div class="container">

<div class="row">
<div class="col-8">
<h3 class="titleadv"><strong> Books</strong></h3>
<hr class="design">
<div class="row">

	<div class="col-sm-12 mt-3 mb-2"  >
	<div class="banner1"  >  

<?php

		$c=$_GET['Id'];
		$sql = "SELECT * FROM books where Id like '%$c%'" ;

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
		$quantity=$row['quantity'];
				$description=$row['description'];
			

		/*echo "<a href=' bookimg.php?Id=$Id'><img src='upload/$img', style= height:300px;  width:200px'></a><h5 style=color:white>$name<br>$price</h5>";

		 echo "<a href='bookimg2.php?Id=$Id' $Id  style=width:200px;height:50px;padding:10px;background-color:blue;'>Buy Now</a>";*/
			  }}
?>
<div class="col-md-8">
<form method="post" action="insertCart.php?Id=<?php echo $Id?>">
<a href=" bookimg.php?Id=<?php echo $Id?>" ><img src="upload/<?php echo $img;?>    "height="300px", width ="200px" ></a>
<h5 class="bookimg"><?php echo "Name:$name";?></h5>
<h5 class="bookimg"><?php echo "Price:$price Tk";?></h5>


<?php if($quantity==0)	{
echo "<h5 class='qty'>Available Quantity:Not available</h5>";}
else 
{
echo "<h5 class='bookimg'>Available Quantity:$quantity piece</h5>";}
?>
<h5 class="bookimg" ><?php echo  nl2br("Desccription:$description");?></h5>
<input type="hidden" name="Id" value="<?php echo $Id;?>"/>
<input type="hidden" name="name" value="<?php echo $name;?>"/>
<input type="hidden" name="price" value="<?php echo $price;?>"/>
<input type="hidden" name="img" value="<?php echo $img;?>"/>


<h5 class="bookimg">Quantity:</h5><input class="bookinp"  type="number" id="quantity"  name="qty" min="0" max="<?php echo $quantity  ?>" class="form-control col-lg-12" ><br>

		
<input  type="submit" name="addcart" style="margin-top:5px;" class="btn btn-success" value="Add to cart">






</div>
</div>   
	
</form>			
</div></div></div>
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