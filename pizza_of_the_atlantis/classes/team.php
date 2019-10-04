<?php  

/**
 * 
 */
class Team{
	
	function __construct($name="",$position="",$description="",$image="",$fb="",$insta="")
	{
		# code...
		$this->name=$name;
		$this->position=$position;
		$this->description=$description;
		$this->image=$image;
		$this->fb=$fb;
		$this->insta=$insta;
	}

	private $name,$position,$image,$description,$fb,$insta;

	function setName($name)
	{
		$this->name=$name;;
	}
	function getName()
	{
		return $this->name;
	}
	function setPosition($position)
	{
		$this->position=$position;
	}
	function getPosition()
	{
		return $this->position;
	}
	function setDescription($description)
	{
		$this->description=$description;
	}
	function getDescription()
	{
		return $this->description;
	}
	function setImage($image)
	{
		$this->image=$image;
	}
	function getImage()
	{
		return $this->image;
	}
	function setFb($fb)
	{
		$this->fb=$fb;
	}
	function getFb()
	{
		return $this->fb;
	}
	function setInsta($insta)
	{
		$this->insta=$insta;
	}
	function getInsta()
	{
		return $this->insta;
	}
	
}
	
	$objarr = array();

	include "db/connect.php";

	$exec=$con->query("SELECT * FROM team");

	while($row=mysqli_fetch_array($exec))
	{
		# code...
		$obj=new Team($row['name'],$row['position'],$row['description'],$row['image'],$row['facebook'],$row['instagram']);
		array_push($objarr,$obj);
	}

	
    /*$obj1=new Team("Salar Ali","Director","Founder & CEO of Pizza Of The Atlantis");
        ///echo "Name: ".$obj1->getName()."<br>Position: ".$obj1->getPosition()."<br>";
    $obj2=new Team("Maham Shoaib","Chef","One of our most important member, having advanced cooking skills.");
        //echo "Name: ".$obj2->getName()."<br>Position: ".$obj2->getPosition()."<br>";
    $obj3=new Team("Bilal-Un-Nabi","Cook","Have more than 15 years of experience in this industry.");
        //echo "Name: ".$obj3->getName()."<br>Position: ".$obj3->getPosition()."<br>";
    $obj4=new Team("Amin Sadiq","Cook","NewBie");*/

    /*$objarr = array($obj1,$obj2,$obj3,$obj4);*/
        /*for ($i=0; $i <count($objarr); $i++)
        {# code...
            echo "Name: ".$objarr[$i]->getName()."<br>";
            echo "Position: ".($objarr[$i]->getPosition())."<br><br>";
        }*/
?>