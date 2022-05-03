<?php
require_once("header.php");

?>

<div class="container">
<div class="row" >
<div class="col-6">
<div class="contact">
<h2 class="title3">Contact Us</h2>
<br>
<div class="row">
<div class="col-6 mt-2 mb-2"  >
     <img src="img/icon-3.png" align="left" class="msimg"></div>
<div class="col-6 mt-2 mb-2"  ><p class="msgdes" ><b>Address</b><br>Mesa Center 8th floor,379 Hudson<br>St,New York,NY 10018 US</p></div>
	
	</div>
	<div class="row">
	<div class="col-6 mt-2 mb-2"  >
  <img src="img/icon.png" align="left"  class="msimg"></div>
<div class="col-6 mt-2 mb-2"  ><p class="msgdes" ><b>Lets Talk</b><br>+18001236876</p></div>
	
	</div><div class="row">
	<div class="col-6 mt-2 mb-2"  >
      <img src="img/icon-1.png" align="left"  class="msimg"></div>
<div class="col-6 mt-2 mb-2"  ><p class="msgdes" ><b>General Support</b><br>contact@example.com</p>
	</div>
	</div>
</div>



</div>
<div style="padding-left:50px"  class="col-6">








<!--table database design part -->
<form action="" method="post" enctype="multipart/form-data">
		<div class="container">
			
			<div class="row">
			
				<div class="col-12"><div>
					<h2 class="message"><font face="Bold Italic">Give Us Message</font></h2>
					</div>
				<div>
					<label for="username"><b>Enter Your First Name</b></label>
					<input class="form-control"  type="text" name="firstName"  size="50" placeholder="Enter First Name" required>
                     </div>
					 <div><br>
					<label for="email"><b>Enter your Last Name</b></label>
					<input class="form-control"  type="text" name="lastName"  size="50" placeholder="Enter Last Name"  required>
                     </div>
					 <div><br>
					<label for="phonenumber"><b>Enter your Email Address</b></label>
					<input class="form-control"  type="email" name="email"  size="50" placeholder="Enter your email here" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"  required>
                     </div>
					 <div><br>
					<label for="password"><b>Enter your Phone Number</b></label>
					<input class="form-control"   type="tel" name="phonenumber"  size="50" placeholder="Enter phone number" required>
                     </div><div>
					 <label for="password"><b>Enter your Meassage Here</b></label>
					 
					<textarea class="form-control"  rows="4" cols="70"  name="msg"  placeholder="Enter Your Message Here"  required ></textarea><br>
                     </div>
					 
					 <input class="btn btn-success" type="submit" name="sub" value="Send Message">      
		</div>
	</form>
<?php

	include("connect.php");
	if(isset($_POST['sub']))
	{
		$error=0;
	$connect=Open();
	$sqlCheck="SELECT * FROM users where email='$_POST[email]'";
	 if ($result=mysqli_query($connect,$sqlCheck))
     {
  // Return the number of rows in result set
	    $count=mysqli_num_rows($result);
	     if($count>0){
		 $error=0;}
			 else{
		$exist="<b>Don't have any account with this email.please Try another on or</b><a href='registration.php'>Sign Up</a>";
	  echo "<center><h5 style='color:red;'>".$exist."</h5></center>";
	  $error=1;
	}}
if($error==0){
		
	

	 $firstName =$_POST['firstName'];
	 $lastName =$_POST['lastName'];
	 $email =$_POST['email'];
	 $phonenumber =$_POST['phonenumber'];
	
	 $msg =$_POST['msg'];
	
	
		
		$connect=Open();
        

		if(mysqli_query(Open(),"insert into message(firstName,lastName,email,phonenumber,msg) values('$firstName','$lastName','$email','$phonenumber','$msg')"))
	{
		echo '<script type="text/javascript"> alert("Message Sent Successfully");</script>';
		
	}
	else
	{
	echo '<script type="text/javascript">alert("Message Not Sent");</script>';
	
	}
	
	}}
	
?></div></div></div>

</div></div>
</center>

<!-- Footer -->
 
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>