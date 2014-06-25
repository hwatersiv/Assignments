<?php 

class Car{
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax;

	public function __construct($price, $speed, $fuel, $mileage){
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;
		$this->tax = 0.12;

		if ($this->price > 10000){
			$this->tax = 0.15;
		}
		
	}

	function Display_all(){
		echo "Price: ".$this->price."<br>";
		echo "Speed: ".$this->speed."<br>";
		echo "Fuel: ".$this->fuel."<br>";
		echo "Mileage: ".$this->mileage."<br>";
		echo "Tax: ".$this->tax."<br>";
	}

}

$car1 = new Car(2000, "35mph", "Full", "15mpg");
$car2 = new Car(2000, "5mph", "Not Full", "105mpg");
$car3 = new Car(2000, "15mph", "Kind of Full", "95mpg");
$car4 = new Car(2000, "25mph", "Full", "25mpg");
$car5 = new Car(2000, "45mph", "Empty", "25mpg");
$car6 = new Car(20000000, "35mph", "Empty", "15mpg");

echo $car1->Display_all();
echo "<br>";
echo $car2->Display_all();
echo "<br>";
echo $car3->Display_all();
echo "<br>";
echo $car4->Display_all();
echo "<br>";
echo $car5->Display_all();
echo "<br>";
echo $car6->Display_all();
?>