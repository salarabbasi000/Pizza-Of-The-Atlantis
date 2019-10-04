<?php

include '../classes/db/connect.php';

session_start();
if(isset($_SESSION['abc']))
echo "<script>alert('Already Logged In'); location.href='../index.php'</script>";

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$q=$con->query("SELECT * FROM users WHERE email='$email'");
	if($q->num_rows>0)
	{
		$row=mysqli_fetch_array($q);	
		if(md5($password)==$row['password'])
		{
			$_SESSION['abc'] = $email;
			header("location:../index.php");
		}
		else
		{
			echo "<script>alert('Password Mismatch'); location.href='../login.php'</script>";
		}
	}
	else
		echo "<script>alert('Invalid User Account'); location.href='../login.php'</script>";
}

?>