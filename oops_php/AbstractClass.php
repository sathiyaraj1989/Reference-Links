<?php

//Abstract class is able to enforce subclasses to implement methods similar to interface. 
//When a method is declared as abstract in an abstract class, its derived classes must implement that method.

//However it is very different from interface. 
//You can have normal properties and methods as a normal class, 
//because it is in fact a class, so it can be instantiated as a normal class.

abstract class Vehicle {
	abstract public function startEngine();

	public function stopEngine() {
		echo "Engine stoped";
	}
}

class Car extends Vehicle {
	public function startEngine() {
		echo "Engine Started";
	}
}

$car = new Car();
echo $car->startEngine();
echo $car->stopEngine();

//Vehicle is an abstract class. 
//Car extends Vechicle, so it has to implement what startEngine() method does, because this method is declared as abstract. 
//However Car does not have to anything with method stopEngine(), it is inherited as a normal class does.