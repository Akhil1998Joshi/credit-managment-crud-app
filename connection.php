<?php
$servername="localhost";
$username="id8988100_abc";
$password="root123";
$dbname="id8988100_mydb";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("connection failed: ".mysqli_connect_error().'<hr>');
}

	
?>