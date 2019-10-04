<?php  

/**
 * 
 */
#Classes:
class Pizza{
	
	function __construct($name="",$description="",$image="",$price_s="",$price_m="",$price_l="")
	{
		# code...
		$this->name=$name;
		$this->description=$description;
		$this->image=$image;
		$this->price=array('small'=>$price_s,'medium'=>$price_m,'large'=>$price_l);
	}

	private $name,$description,$price,$image;

	function setName($name)
	{
		$this->name=$name;
	}
	function getName()
	{
		return $this->name;
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
	function setSmallPrice($price_s)
	{
		$this->price['small']=$price_s;
	}
	function setMediumPrice($price_m)
	{
		$this->price['medium']=$price_m;
	}
	function setLargePrice($price_l)
	{
		$this->price['large']=$price_l;
	}
	function getSmallPrice()
	{
		return $this->price['small'];
	}
	function getMediumPrice()
	{
		return $this->price['medium'];
	}
	function getLargePrice()
	{
		return $this->price['large'];
	}

}


class Breverage{
	
	function __construct($name="",$image="",$price_s="",$price_l="")
	{
		# code...
		$this->name=$name;
		$this->image=$image;
		$this->price=array('small'=>$price_s,'1.5 litre'=>$price_l);
	}

	private $name,$price,$image;

	function setName($name)
	{
		$this->name=$name;
	}
	function getName()
	{
		return $this->name;
	}
	function setImage($image)
	{
		$this->image=$image;
	}
	function getImage()
	{
		return $this->image;
	}
	function setSmallPrice($price_s)
	{
		$this->$price['small']=$price_s;
	}
	function getSmallPrice()
	{
		return $this->price['small'];
	}
	function setLargePrice($price_l)
	{
		$this->$price['1.5 litre']=$price_l;
	}
	function getLargePrice()
	{
		return $this->price['1.5 litre'];
	}
}


class Starter{
	
	function __construct($name="",$image="",$description="",$pieces="",$price="")
	{
		# code...
		$this->name=$name;
		$this->image=$image;
		$this->description=$description;
		$this->pieces=$pieces;
		$this->price=$price;
	}

	private $name,$description,$pieces,$price,$image;

	function setName($name)
	{
		$this->name=$name;
	}
	function getName()
	{
		return $this->name;
	}
	function setImage($image)
	{
		$this->image=$image;
	}
	function getImage()
	{
		return $this->image;
	}
	function setDescription($description)
	{
		$this->description=$description;
	}
	function getDescription()
	{
		return $this->description;
	}
	function setPrice($price)
	{
		$this->price=$price;
	}
	function getPrice()
	{
		return $this->price;
	}
	function setPieces($pieces)
	{
		$this->pieces=$pieces;
	}
	function getPieces()
	{
		return $this->pieces;
	}
}


class Deal
{
	//private $pizza,$starter,$breverage;

	/*function __construct($pizza,$starter,$breverage)
	{
		# code...
		$this->pizza=new Pizza($pizza);
		$this->starter=$starter;
		$this->breverage=$breverage;
	}*/

}



include "db/connect.php";

#Objects;

$objpizza=array();

$exec=$con->query("SELECT * FROM pizza");


while($row=mysqli_fetch_array($exec))
{
			# code...
	$obj=new Pizza($row['name'],$row['description'],$row['image'],$row['small_price'],$row['medium_price'],$row['large_price']);
	array_push($objpizza,$obj);
}



$objbreverage=array();

$exec=$con->query("SELECT * FROM breverage");

while($row=mysqli_fetch_array($exec))
{
			# code...
	$obj=new Breverage($row['name'],$row['image'],$row['small_price'],$row['half_litre_price']);
	array_push($objbreverage,$obj);
}



$objstarter=array();

$exec=$con->query("SELECT * FROM starter");

while($row=mysqli_fetch_array($exec))
{
			# code...
	$obj=new Starter($row['name'],$row['image'],$row['description'],$row['pieces_or_servings'],$row['price']);
	array_push($objstarter,$obj);
}

?>