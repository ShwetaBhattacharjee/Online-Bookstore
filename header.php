<?php
ob_start();
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

<title>The Online Bookstore</title>
</head>
<body >



<div class="pictures" style="background-image:url('img/black.jpg');">


<div class="container">	

<img class="logo" align='left' src='img/logos2.png'><h1 class="onbook"><strong>The Online Bookstore</strong></font></h1>



<div class="row">
<div class="col-8">
<form method="post" class="form-inline" action="search.php">
<input  style="width:1000px"class="form-control " name="search" type="text" placeholder="Search By Name,Catagory,Author"></div>
<div class="col-2"><button class="btn btn-danger   mr-sm-1" style="width:80px" type="submit" name="sub" ><i class="fa fa-search"></i></button></div>

<div class="col-2">
<?php if (isset($_SESSION['username'])){?>
		<div class="dropdown">
		<button style="margin:2px" class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img  src="<?php echo $_SESSION['img'] ?>"width="50px" height="25px"" >

		</button>
		<?php
		}
		else
		{
		?>
		<button  style="margin:2px"  class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Sign In</b> </button>
		<?php }			
		?> 
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<?php if (isset($_SESSION['username'])){?>
		<a class="dropdown-item" href="profile.php">Profile</a>
		<a class="dropdown-item" href="logout.php">Log Out</a>

<?php
}
else
		{
		?>
		<a class="dropdown-item" href="signin.php">Sign In</a>
		<a class="dropdown-item"   href="registration.php">Sign Up</a>
<?php }			
?> 
</div>
</div>
</form>	   
</div></div>
</div></div>



<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-dark ">
<div class="container">

<button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div  class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
<li class="nav-item active">
<a  href="home.php"><strong>Home</strong> <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="home.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<strong>Publisher</strong>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"><br>

<a class="dropdown-item" href="batighor.php">Batighor Prokashoni</a>
<a class="dropdown-item" href="somoy.php">Somoy Prokashon</a>
<a class="dropdown-item" href="adorsho.php">Adorsho</a>
<a class="dropdown-item" href="prothoma.php">Prothoma Prokashon</a>
<a class="dropdown-item" href="ononna.php">Ononna</a>
<a class="dropdown-item" href="bdacademy.php">Bangla Academy</a>
<a class="dropdown-item" href="onno.php">Onnoprokash</a>
<a class="dropdown-item"   href="panjeree.php">panjeree publications</a>

</div>
</li>

<li class="nav-item dropdown">
<a class=" dropdown-toggle" href="home.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<strong> Author </strong>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">


<a class="dropdown-item" href="humayun.php">Humayun Ahmed</a>
<a class="dropdown-item" href="sunil.php">Sunil Gangopaddhay</a>

<a class="dropdown-item" href="jafor.php">Md. Jafar Iqbal</a>
<a class="dropdown-item"   href="samaresh.php">Samaresh Majumdar</a>

</div>
</li>


<li class="nav-item">
<a href="trp.php"><strong>Top Rated Books</strong></a></b></li>
</li>
<li class="nav-item">
<a href="bookfair.php"><strong>Book Fair Books</strong></a>
</li>
<li class="nav-item">
<a href="newpublished.php"><strong>New Published Books</strong></a>
</li>
<li class="nav-item">
<a href="list.php"><strong>All Books</strong></a>
</li>
<li class="nav-item">
<a href="messege.php"><strong>Contact Us</strong></a>
</li>
<li class="nav-item">
<a href="about.php"><strong>About Us</strong></a>
</li>
</li>
<li class="nav-item">

<a href="viewcart.php"><i class="fa fa-shopping-cart" style="font-size:30px"aria-hidden="true"></i></a>
</li>

</ul></div>
</div></div>
</nav>