<?php
function Open()
{

$servername="127.0.0.1";
$username="root";
$password="";
$dbname="170204111";
$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	/*if ($conn->connect_error) 
	{
	die("Connection failed: " . $conn->connect_error);
	}
	else
	{
	echo "Connected successfully";
	}*/
return $conn;
}
function close($conn)
{
$conn->close();
}
//http://127.0.0.1/phpmyadmin/server_databases.php?server=1&token=df4840547ff7d7922cd09ff32a1f41a1
?>