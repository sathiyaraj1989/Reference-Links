<?php

/*Interface declares what methods a class must have without having to implement them. 
Any class that implements the interface will have to implement details of those declared methods. 
Interface is not a class, so you can not instantiate an interface. 
It is useful when you need to enforce some classes to do something. */


interface Car { 
	public function setModel($name);
	
	public function getModel();
}

interface Vehicle {
	public function setHasWheels($bool); 
   
	public function getHasWheels();
}


class miniCar implements Car, Vehicle {
	private $model; 
	private $hasWheels; 
	
	public function setModel($name)
	{ 
	  	$this -> model = $name; 
	}
	
	public function getModel()
	{
	  	return $this -> model; 
	}
	
	public function setHasWheels($bool)
	{ 
	  	$this -> hasWheels = $bool; 
	}
	
	public function getHasWheels()
	{
		return ($this -> hasWheels)? "has wheels" : "no wheels";
	}
}