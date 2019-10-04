<?php

include '../classes/db/connect.php';

$id=$_GET['id'];

$queryval=$con->query("SELECT * FROM orders WHERE id='$id'");
$disp=mysqli_fetch_array($queryval);

$query=$con->query("DELETE FROM orders WHERE id='$id'");
header('location:../admin/orders.php');

?>