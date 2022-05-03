
<?php
// Start the session


require_once("header.php");
?>
<div id="container"><br><br><center>
<h1 class="title"><strong>Welcome to Admin Home</strong></h1>
<center>
<img  src="img/welcome.jpg" class="rounded-circle" id="round"  alt="Ci Terre"></center>

<?php
	include("../connect.php");
?>
</center>
</div>

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