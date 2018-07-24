<?php 

class Bike{
	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price, $max_speed){
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
	}

	function displayInfo(){
		echo "Price: ".$this->price."<br>";
		echo "Max Speed: ".$this->max_speed."<br>";
		echo "Miles: ".$this->miles."<br>";
	}

	function drive(){
		echo "Driving<br>";
		$this->miles += 10;
		return $this;
	}

	function reverse(){
		echo "Reversing<br>";
		$this->miles -= 5;
		if ($this->miles < 0){
			$this->miles = 0;
		}
		return $this;
	}
}

$Bike1 = new bike(200, "25 mph");
$Bike2 = new bike(200, "25 mph");
$Bike3 = new bike(200, "25 mph");

echo "Bike1: ";
$Bike1->drive()->drive()->drive()->displayInfo();
echo "<br>";
echo "Bike2: ";
$Bike2->drive()->drive()->reverse()->reverse()->displayInfo();
echo "<br>";
echo "Bike3: ";
$Bike3->reverse()->reverse()->displayInfo();
echo "<br>";
?>