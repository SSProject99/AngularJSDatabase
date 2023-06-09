<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'angularjsdatabase';

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME,"3305");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} 

// else {
// 	echo "Successfully database connection established:)";
// }
?>