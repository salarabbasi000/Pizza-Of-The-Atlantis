<?php

include '../classes/db/connect.php';

session_start();
if(isset($_SESSION['abc']))
echo "<script>alert('Already Logged In'); location.href='../admin/index.php'</script>";

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$q=$con->query("SELECT * FROM users WHERE email='$email' AND is_admin=1");
	if($q->num_rows>0)
	{
		$row=mysqli_fetch_array($q);	
		if(md5($password)==$row['password'])
		{
			$_SESSION['abc'] = $email;
			header("location:../admin/index.php");
		}
		else
		{
			echo "<script>alert('Password Mismatch'); location.href='../admin/login.php'</script>";
		}
	}
	else
		echo "<script>alert('Invalid Admin Account'); location.href='../admin/login.php'</script>";
}

?>