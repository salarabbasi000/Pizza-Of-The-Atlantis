<?php

include '../classes/db/connect.php';

$id=$_GET['id'];

$query=$con->query("DELETE FROM users WHERE id='$id'");
header('location:../admin/users.php');

?>