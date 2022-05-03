<?php

require_once("header.php");
?>



<div class="container"><br><br><center>
<h2 style="color:white;padding:10px;"><strong></strong></h2>
<main>
<div class="wrapper main">
<section class="section-default">


<!-- <p> An email will be send to you to reset your password </p> -->

<form action="reset-request.php " method="post">

<div class="table-responsive">
<table class="table">
<TABLE class="tabledesign2"  BORDER=0 
CELLSPACING=1000 CELLPADDING=20>
<!-- log in page-->
		<tr>
		<td class="td6"><h3>Email</h3></td>
		<td  class="td2"><input type="text" name="email" placeholder="Email Address"></td>
		</tr>
		<tr>
		<td style="padding-left:100px"></td>
		<td><input type="submit"></td>
		</tr>
		</table>
		</table></div></div>

		</form>
		</section>
		</div><br><br>
		</main>
<?php
// Start the session


require_once("footer.php");
?>