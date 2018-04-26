<?php

/*
__call() function is triggered when invoking inaccessible methods in an object context. 
The syntax for __call() is mixed __call(string $name,array $arguments).
The $name parameter is the name of the method being called. 
The $arguments parameter is an enumerated array containing parameters passed to the $name method.
*/

class ABC { 

    public function __call($method_name,$arguments) {

        $methodArray = array('displayMessage1','displayMessage2');
        if (in_array($method_name,$methodArray) === false) {
            die("\n Method does not exist");
        } 

        if (count($arguments) === 2) {
            $this->displayMessage2($arguments[0],$arguments[1]);
        }

        elseif (count($arguments) === 1) {
            $this->displayMessage1($arguments[0]);
        }

        else {
            echo "\n unknown method";
            return false;
        }
    }

  function displayMessage1($var1) {
        echo ".$var1."; echo '<br>';
    }

  function displayMessage2($var1,$var2) {
    echo ".$var1.----.$var1.";echo '<br>';
    } 

} 

$obj1 = new ABC;
$obj1->displayMessage1('hello');
$obj1->displayMessage2('hello','hello2');
$obj1->displayMessage3('Hello');