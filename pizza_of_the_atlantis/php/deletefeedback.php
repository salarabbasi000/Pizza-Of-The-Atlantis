<?php  

include '../classes/db/connect.php';

$id=$_GET['id'];

$query=$con->query("DELETE FROM feedback WHERE id='$id'");
header('location:../admin/inbox.php');

?>