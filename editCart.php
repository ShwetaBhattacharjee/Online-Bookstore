<?php

session_start();
include("/connect.php");
$Id=$_POST['name0'];
$name=$_POST['name1'];
$price=$_POST['name2'];

$quantity=$_POST['name3'];
$event=$_POST['event'];
$product=array($Id,$name,$price,$quantity);
if($event=="Update"){

   $_SESSION[$name]=$product;


}
else if($event=="Delete"){

    unset($_SESSION[$name]);

if(mysqli_query(Open(),"DELETE FROM cart WHERE id=$Id"))
{
    echo '<script type="text/javascript"> alert("Inserted");</script>';
}
else
{
     echo '<script type="text/javascript">alert("Not Insert");</script>';

}
}

header("Location:viewcart.php");

?>
