<?php

/*Interface declares what methods a class must have without having to implement them. 
Any class that implements the interface will have to implement details of those declared methods. 
Interface is not a class, so you can not instantiate an interface. 
It is useful when you need to enforce some classes to do something. */

interface Vehicle {
	public function startEngine();
}

class Car implements Vehicle {
	public function startEngine() {
		echo "Engine Started";
	}
}

$car = new Car();
echo $car->startEngine();

/*Vehicle is an interface with a declared method startEngine(). 
Car implements Vechicle, so it has to implement what startEngine() method does */