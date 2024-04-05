<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password);
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "connected sucessfully";
$q="create database csp";
if(mysqli_query($con,$q))
{
	echo "Database created successfully";
}
else
{
	 echo "Error creating database: " . mysqli_error($con);
}
mysqli_close($con);
?>