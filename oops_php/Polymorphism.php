<?php

/*The provision of a single interface to entities of different types. 
Basically it means PHP is able to process objects differently depending on their data type or class. 
This powerful feature allows you to write interchangeable objects that sharing the same interface.*/

interface Address {

    public function getAddress();
}

//Inheriting class Address
class Employee implements Address {
    
    public function getAddress() {
        echo 'I am an employee';
    }
}

//Inheriting class Address
class Company implements Address {
    
    public function getAddress() {
        echo 'I am an Company';
    }
}

function getaddress(Address $address) {
    $address->getAddress();
}

//Displaying the Employee Address using same interface
echo 'Displaying the address of employee'.' : '.getaddress(new Employee()); echo '<br>';

//Displaying the Company Address using same interface
echo 'Displaying the address of Company'.' : '.getaddress(new Company());


//Above example, test(Shape $shape) function declares(type hints) its only parameter to be Shape type. 
//This function is not aware of Circle and Triangle classes. 
//When either class is passed to this function as a parameter, it processes respectively.