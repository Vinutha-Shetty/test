<?php
class Vehicle{
	
	
	public $name ;
	public $milage;
	public $wheeler;
	
	
	function  __construct($n,$m,$w){
	
		$this->name = $n;
		$this->milage = $m;
		$this->wheeler=$w;
		
	}
	
	function milage_up(){
		
		return $this->milage++;
	}
	
	function milage_down(){
		
		return $this->milage--;
	}
}
$automobile1 = new Vehicle('BMTC', 40,"4 wheeler");
$automobile2 = new Vehicle('swift',60,"4 wheeler");

echo "Vehicle="."&nbsp". $automobile1->name."<br>";
echo "Milage="."&nbsp". $automobile1->milage."kmph"."<br>";
echo "wheeler="."&nbsp". $automobile1->wheeler."<br>"."<br>";


class Bus extends Vehicle{
	public $isairbag="True";
	
	function __construct(){
		$this->name = "Innova";
		$this->milage = 100;
		$this->wheeler="4 wheeler";
		$this->isairbag="True";
	}
	
	function milage_up(){
		return $this->milage=$this->milage+5;
	}
}

$child = new Bus();


echo "Vehicle=".$child->name."<br>";

$child->milage_up();

echo "Milage="."&nbsp". $child->milage."kmph"."<br>";
echo "wheeler="."&nbsp".$child->wheeler."<br>";
echo "Contain airbag?"."&nbsp".$child->isairbag."<br>";
?>