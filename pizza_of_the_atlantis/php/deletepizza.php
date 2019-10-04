<?php

include '../classes/db/connect.php';

$id=$_GET['id'];

$queryval=$con->query("SELECT * FROM pizza WHERE id='$id'");
$disp=mysqli_fetch_array($queryval);
unlink($disp['image']);

$query=$con->query("DELETE FROM pizza WHERE id='$id'");
header('location:../admin/menutable.php');

?>