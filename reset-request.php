<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";
include("connect.php");
if(isset($_POST["email"]))
{
$_getEmail=trim($_POST["email"]);
$connect=Open();
$sqlSelect = "SELECT * FROM users where email='$_getEmail' and status='Active' " ;
$result=mysqli_query($connect,$sqlSelect);
{
// Return the number of rows in result set
$count=mysqli_num_rows($result);
if($count==1)
{
	 $row = $result->fetch_array();
	 if($row['email']==$_getEmail)
	 {
			$mdpass=md5("12345678");
			$sql = "UPDATE users SET password='$mdpass' WHERE email='$_getEmail' and status='Active'";
			SendEmail($_getEmail,$mdpass);
			if ($connect->query($sql) === TRUE) 
			{
			  echo "Password has updated successfully";
			   echo("<script>window.location = 'changepassword.php';</script>");
			 
			} 
			else 
			{
			  echo "Error updating record: " . $connect->error;
			}
	 }
	 


}
else
{
   echo "You have entered Invalid Email Address";
}
}		
}
else
{
   echo "Email Address NOT Matched";
}

function SendEmail($email,$pass)
{

$mail = new PHPMailer(true);
//$mail->IsSMTP();

$mail->SMTPDebug  = 4;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "christinajessy111@gmail.com";
$mail->Password   = "shwe taa97";
//$mail->Mailer = "smtp"; 
//$mail->IsSMTP(); // telling the class to use SMTP  
$mail->IsHTML(true);
$mail->AddAddress($email, "<Client>");
$mail->SetFrom("christinajessy111@gmail", "No-Reply");
$mail->AddReplyTo($email, "User");
$mail->AddCC("shwetaparna555@gmail.com", "RERT");
$mail->Subject = "Password Recovery";
$content = "<h2>Password has been Reset. Your New Password is ".$pass."</h2>";

$mail->MsgHTML($content); 
if(!$mail->Send()) {
echo "Error while sending Email.";
var_dump($mail);
} else {
echo "Email sent successfully";
}
}
/*include("../connect.php");
$connect=Open();
if(isset($_POST["reset-request-submit"])){

$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);

$url="www.mmtuts.net/forgottenpwd/create-new-password.php?selector=".$selector. "&validator=" .bin2hex($token);	

$expires=date("U")+1800;

$userEmail=$_POST["email"];
$sql="DELETE FROM pwdReset where PwdResetEmail=?;";
$stmt=mysqli_stmt_init($connect);
if(!mysqli_stmt_prepare($stmt,$sql)){

echo "There was an error!";
exit();

}
else{


mysqli_stmt_bind_param($stmt, "s", $userEmail);
mysqli_stmt_execute($stmt);
} 
$sql="INSERT INTO pwdReset(pwdResetEmail, pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES(?,?,?,?);";
$stmt=mysqli_stmt_init($connect);
if(!mysqli_stmt_prepare($stmt,$sql)){

echo "There was an error!";
exit();

}
else{

$hashedToken=password_hash($token, PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt, "s", $userEmail, $selector,$hashedToken,$expires);
mysqli_stmt_execute($stmt);


}

mysqli_stmt_close($stmt);
mysqli_close();

$to =$userEmail;
$subject ='Reset your password for mmtuts';
$message='<p>We received a password reset request</p>';}
else{

header("Location: ../index.php");
}*/
?>