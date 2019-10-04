<?php

include '../classes/db/connect.php';

$id=$_GET['id'];

$queryval=$con->query("SELECT * FROM team WHERE id='$id'");
$disp=mysqli_fetch_array($queryval);
unlink($disp['image']);

$query=$con->query("DELETE FROM team WHERE id='$id'");
header('location:../admin/basic-table.php');

?>