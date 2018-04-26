<?php

/*Class is like your house blueprint. Before your house is constructed, there is a house blueprint. 
It is not an actual house, but a plan how this house will look like, how many rooms it will have and so on. 
Then the house will be constructed by following the blueprint exactly. 
In this analogy, the house blueprint is a class and your actual house is an object. 
We can have unlimited objects of a class, 
just like we can build unlimited exact houses by following the same house blueprint.*/

/*A few key points to keep in mind:

Class is generic, whereas Object is specific
Class defines properties/functions of an Object
Object is an instance of a Class
You can instantiate an object, but not a Class */


//Class is consist of properties and methods.
//Below is a PHP class. In this simple class. 
//$postCode is a property and ringBell() is a method. 
//They are all prefixed with a visibility keyword (public).

Class House {

	public $postCode = “560121”;

	public function ringBell() {
		echo “Ding Dang Dong”;
	}
}

//To instantiate an object of a class, use the keyword new as below:

$house = new House();