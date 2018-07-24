<?php 

class Bike{
	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price, $max_speed, $miles){
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
	}

	function displayInfo(){
		return $this->price;
		return $this->max_speed;
		return $this->miles;
	}

	function drive(){
		$this->miles += 10;
	}

	function reverse(){
		echo "Reversing";
		$this->miles -= 5;
		if ($this->miles < 0){
			$this->miles = 0;
		}
		echo $this->miles;
	}
}

$Bike1 = new bike(200, "25 mph", 0);
$Bike2 = new bike(200, "25 mph", 0);
$Bike3 = new bike(200, "25 mph", 0);

echo "bike 1:".$Bike1->drive()."<br>";
echo "bike 1:".$Bike1->drive()."<br>";
echo "bike 1:".$Bike1->drive()."<br>";
echo "bike 1:".$Bike1->displayInfo()."<br>";

echo $Bike2->drive();
echo $Bike2->drive();
echo $Bike2->reverse();
echo $Bike2->reverse();
echo $Bike2->displayInfo();

echo $Bike3->reverse();
echo $Bike3->reverse();
echo $Bike3->displayInfo();

?>