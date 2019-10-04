<?php

include '../classes/db/connect.php';

if($_POST['signup'])
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];

	if($password==$cpassword)
	{
		$q=$con->query("SELECT * FROM users WHERE email='$email'");
		if($q->num_rows==0)
		{
			$password=md5($password);
			$con->query("INSERT INTO users (name,email,address,contact,password) VALUES ('$name','$email','$address','$contact','$password')");
			echo "<script>alert('Registered successfully'); location.href='../login.php' </script>";
		}
		else
			echo "<script>alert('Account already exists'); location.href='../login.php' </script>";
	}
	else
		echo "<script>alert('Password Mismatch'); location.href='../signup.php' </script>";
}

?>