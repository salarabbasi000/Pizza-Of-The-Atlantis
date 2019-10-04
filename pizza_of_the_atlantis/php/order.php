<?php
session_start();

include '../classes/db/connect.php';
//echo $_GET['name']."<br>".$_GET['type']."<br>".$_GET['price']."<br>";
//array_push($_SESSION['breverage_small'],array('name'=>$_GET['name'],'type'=>$_GET['type'],'price'=>$_GET['price']))
if($_POST['order'])
{


	if(count($_SESSION['order'])==0)
	echo "<script>alert('Make some order first.'); location.href='../menu_3.php'</script>";
	else
	{


		//$name=$_POST['name'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$items=$_POST['items'];
		$promo=$_POST['code'];
		$total=$_POST['total'];

		$con->query("INSERT INTO orders (email,address,contact,items,promo,total) VALUES ('$email','$address','$contact','$items','$promo','$total')");

		unset($_SESSION['order']);
		echo "<script>alert('Your order has been delieverd.'); location.href='../menu_3.php'</script>";
		session_start();
	}


	
}

//header("location:../menu_3.php");
?>