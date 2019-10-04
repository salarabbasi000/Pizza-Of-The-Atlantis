<?php

include "../classes/db/connect.php";

session_start();
if(!isset($_SESSION['abc']))
echo "<script>alert('You need to login first!'); location.href='../admin/login.php'</script>";

if (isset($_POST['sendmsg'])) {
	# code...
	$q=$con->query("SELECT * FROM users");
	while ($row=mysqli_fetch_array($q))
	{
		$msg="Dear ".$row['name']."<br>".$_POST['offer'];
		mail($row['email'],"Pizza Of The Atlantis",$msg);
	}
}

header("location:../admin/inbox.php");


?>