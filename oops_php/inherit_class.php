<?php

//It lets subclass inherits characteristics of the parent class. 
//Parent class decides what and how its properties/methods to be inherited by declared visibility.

Class Employee {

    //Defining a property
    public $company = 'Vivid';

    //Defining a method
    public function getDetails() {
        return 'My name is Sathiya';
    }
}

//Inheriting class Employee
class Developer extends Employee
{
    
}

// Creating an object for the class Developer
$developer = new Developer();

//Displaying the Employee class property using the derived class ojbect
echo 'Displaying the property from Base Class'.' : '.$developer->company; echo '<br>';

//Displaying the Employee class method value using the derived class ojbect
echo 'Displaying the property from Base Class'.' : '.$developer->getDetails();
 
/*The key word here is extends. When Circle class extends from Shape class,
it inherits all of the public and protected methods as well as properties from Shape class. */
