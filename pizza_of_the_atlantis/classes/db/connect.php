<?php
$server="localhost";
$user="root";
$password="";
$dbname="pizza_of_the_atlantis";

 $con=mysqli_connect($server,$user,$password,$dbname);

 if(mysqli_connect_error($con))
 {
	echo "Connection Failed.<br>";
 }
?>