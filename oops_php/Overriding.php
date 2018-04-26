    <?php

/*
If you create a method in the child class having the same name, 
same number of parameters and the same access specifier as in it’s parent then we can say that 
we are doing method overriding in PHP.
*/

class AA {
    public function output($args) {
        echo "\n Parent - the parameter value is $args";echo '<br>';
    }
}

class BB extends AA { 

    public function output($args) {
        echo "\n Child - the parameter value is $args";
    }
}

$obj1 = new AA;
$obj2 = new BB;

$obj1->output('class AA');
$obj2->output('class BB');

/*
As according to polymorphism, 
if we invoke a method by inspecting the object at run time is a case of polymorphism. 
Here in above example either we call method output () of a class AA or class BB is depend on object 
which is making the call to the method.
*/