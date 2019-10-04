<?php

include '../classes/db/connect.php';

$id=$_GET['id'];

$queryval=$con->query("SELECT * FROM breverage WHERE id='$id'");
$disp=mysqli_fetch_array($queryval);
unlink($disp['image']);

$query=$con->query("DELETE FROM breverage WHERE id='$id'");
header('location:../admin/menutable.php');

?>