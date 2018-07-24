<?php

class Animal{
	public $name;
	public $health;

	function __construct($para_name){
		$this->name = $para_name;
		$this->health = 100;
	}

	function walk(){
		$this->health -= 1;
		return $this;
	}

	function run(){
		$this->health -= 5;
		return $this;
	}

	function displayHealth(){
		echo $this->name.": ";
		echo $this->health;
	}
}

class Dog extends Animal{
	function __construct($para_name){
		parent::__construct($para_name);
		$this->health = 150;
	}

	function pet(){
		$this->health += 5;
		return $this;
	}
}

class Dragon extends Animal{
	function __construct($para_name){
		parent::__construct($para_name);
		$this->health = 170;
	}

	function fly(){
		$this->health += 10;
		return $this;
	}

	function displayHealth(){
		echo "this is a Dragon!";
		parent::displayHealth();
	}
}

$animal = new Animal("George");

$animal->walk()->walk()->walk()->run()->run()->displayHealth();

$dog = new Dog("Rover");

$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

$dragon = new Dragon("Derpy");

$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();
?>