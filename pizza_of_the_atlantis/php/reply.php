<?php

include '../classes/db/connect.php';

if(isset($_POST['send']))
{
	$id=$_GET['id'];
	$msg=$_POST['reply'];
	$q=$con->query("SELECT * FROM feedback WHERE id='$id'");
	$result=mysqli_fetch_array($q);
	$mail=$result['email'];
	mail($mail, "Pizza Of The Atlantis", $msg);
	header("location:../admin/inbox.php");

}

?>