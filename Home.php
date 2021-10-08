<html>
<head><title> Home </head></title>
<body>
<h1> Home page </h1>
<?php
include 'Pdo.php';
session_start();
if (isset($_SESSION ['userName'])){
	?>
<a href="http://localhost/MovieSite/Logout.php">Logout</a>
<?php
}
else{
	?>
<a href="http://localhost/MovieSite/Registration.php">Register</a>
<a href="http://localhost/MovieSite/Login.php">Login</a>
<?php
}
?>

<body>
<html>