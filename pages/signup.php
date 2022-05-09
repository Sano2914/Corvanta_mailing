<?php
// session_start();
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','corvanta_mailing');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

// database insert SQL code
$sql = "INSERT INTO `signup_db` (`id`, `name`, `email`, `pwd`) VALUES ( '0','$name', '$email', '$pwd')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	// echo " login sucessfull";
	header('location: signin.php');
}
?>