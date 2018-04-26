<?php

/*
The class can be declared as static, but they dont call the constructor automatically, so self::__construct() will returns the error.

So to overcome this, we can use initialize() function and can b call it in each method. Below is the example.
*/

class Hello
{
    private static $greeting = 'Hello';
    private static $initialized = false;

    private static function initialize()
    {
        if (self::$initialized)
            return;

        self::$greeting .= ' There!';
        self::$initialized = true;
    }

    public static function greet()
    {
        self::initialize();
        echo self::$greeting;
    }
}

Hello::greet(); // Hello There!


/*------------------------------*/


/*
Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. 

A property declared as static cannot be accessed with an instantiated class object (though a static method can).

When a method is declared as static, it cannot access the not static variables and methods, since it is requires an instance of the class.

To access the static variable from the static method, we need to add prefix "self" keyword and it works only inside the class.

To access the static method outside the class, we can use "::" double colon and "->" cannot be used for a static method

Below is the example.
*/


class User
{
    public $name;
    public $age;
    public static $minimumPasswordLength = 6;
    
    public function Describe()
    {
        return $this->name . " is " . $this->age . " years old";
    }
    
    public static function ValidatePassword($password)
    {
        if(strlen($password) >= self::$minimumPasswordLength)
            return true;
        else
            return false;
    }
}

$password = "test";
if(User::ValidatePassword($password))
    echo "Password is valid!";
else
    echo "Password is NOT valid!";