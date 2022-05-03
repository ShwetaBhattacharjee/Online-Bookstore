<?php
SESSION_START();
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
<script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>
<title>Admin</title>
</head>
<body style="background-image:url(''); "class="background">



<div class="pictures" style="background-image:url('img/black.jpg');">


<div class="container">	

<img class="logo" align='left' src='img/logos2.png'><h1 class="onbook"><strong>The Online Bookstore</strong></font></h1>

</div></div>
<nav class="navbar navbar-expand-lg navbar-dark ">
<div class="container">

<button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div  class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">



<?php if(isset($_SESSION['useradmin'])){?>
			<li class="nav-item">
			<a href="adminhome.php"><b><?php echo $_SESSION['useradmin'] ?></b> </a>
			</li>
			<li class="nav-item">
			<a href="logout.php"><strong>Log out</strong></a>
			</li>
			<li class="nav-item">
			<a href="alluser.php"><strong>All User</strong></a>
			</li>
			<li class="nav-item">
			<a href="insert.php"><strong>Insert Books</strong></a>
			</li>
			<li class="nav-item">
			<a href="list.php"><strong>Books List</strong></a>
			</li>
			<li class="nav-item">
			<a href="order.php"><strong>Order List</strong></a>
			</li>
			</li>
			<li class="nav-item">
			<a href="customermsg.php"><strong>Customer Message</strong></a>
			</li>
<?php
}
else
{
?>
</li> <center>
<li class="nav-item" >
<a  align="center" href="index.php">Home</a>
</li></center>
</li>

<?php }			
?> 
</ul></div>
</div></div>
</nav>