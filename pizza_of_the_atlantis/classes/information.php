<?php

/**
 * 
 */
class Information
{
	private $email,$contact,$address,$deliverycharges;

	function __construct($email="",$contact="",$address="",$deliverycharges=0)
	{
		# code...
		$this->email=$email;
		$this->contact=$contact;
		$this->address=$address;
		$this->deliverycharges=$deliverycharges;
	}

	function getEmail()
	{
		return $this->email;
	}

	function getContact()
	{
		return $this->contact;
	}

	function getAddress()
	{
		return $this->address;
	}

	function getDeliveryCharges()
	{
		return $this->deliverycharges;
	}

}

include "db/connect.php";

$d=mysqli_fetch_array($con->query("SELECT * FROM information"));
$info=new Information($d['email'],$d['contact'],$d['address'],$d['delivery_charges']);


?>