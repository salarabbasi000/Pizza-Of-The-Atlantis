<?php

class OpeningHours
{
	private $openhr,$openmin;
	private $closehr,$closemin;
	function __construct($openhr="",$openmin="",$closehr="",$closemin="")
	{
		# code...
		$this->openhr=$openhr;
		$this->openmin=$openmin;
		$this->closehr=$closehr;
		$this->closemin=$closemin;

		if($this->openhr>23) $this->openhr=23;
		if($this->openmin>59) $this->openmin=59;
		if($this->closehr>23) $this->closehr=23;
		if($this->closemin>59) $this->closemin=59;
	}

	function setOpenHr($openhr)
	{
		$this->openhr=$openhr;
		$this->openmin=$openmin;
		if($this->openhr>23) $this->openhr=23;
	}

	function getOpenHr()
	{
		//return $this->openhr;
		return str_pad((int) $this->openhr,2,"0",STR_PAD_LEFT);
	}

	function setOpenMin($openmin)
	{
		$this->openmin=$openmin;
		if($this->openmin>59) $this->openmin=59;
	}

	function getOpenMin()
	{
		//return $this->openmin;
		return str_pad((int) $this->openmin,2,"0",STR_PAD_LEFT);
	}



	function setCloseHr($closehr)
	{
		$this->closehr=$closehr;
		$this->closemin=$closemin;
		if($this->closehr>23) $this->closehr=23;
	}

	function getCloseHr()
	{
		//return $this->closehr;
		return str_pad((int) $this->closehr,2,"0",STR_PAD_LEFT);
	}

	function setCloseMin($closemin)
	{
		$this->closemin=$closemin;
		if($this->closemin>59) $this->closemin=59;
	}

	function getCloseMin()
	{
		//return $this->closemin;
		return str_pad((int) $this->closemin,2,"0",STR_PAD_LEFT);
	}
}

$workingdays_time=new OpeningHours(7,0,23,30);
$sunday_time=new OpeningHours(0,0,0,0);
//str_pad((int) $number,$n,"0",STR_PAD_LEFT);

?>