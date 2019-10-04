<?php 

/**
 * 
 */
class Feedback
{
	private $name,$email,$message;
	function __construct($name="",$email="",$message="")
	{
		# code...
		 $this->name=$name;
		 $this->email=$email;
		 $this->message=$message;
	}

	function setName($name="")
	{
		$this->name=$name;
	}

	function setEmail($email="")
	{
		$this->email=$email;
	}

	function setMessage($message="")
	{
		$this->message=$message;
	}

	function getName()
	{
		return $this->name;
	}

	function getEmail()
	{
		return $this->email;
	}

	function getMessage()
	{
		return $this->message;
	}

}

include "db/connect.php";

$objfeedback=array();

$exec=$con->query("SELECT * FROM feedback");

while($arr=mysqli_fetch_array($exec))
{
	$obj=new Feedback($arr['name'],$arr['email'],$arr['message'])
	//echo $arr['name']."<br>";
	array_push($objfeedback,$obj);
}


?>