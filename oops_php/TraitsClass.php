<?php

/* Reference Links : https://www.sitepoint.com/using-traits-in-php-5-4 */
/*Trait is smilar to abstract class, which cannot be instantiated by own.
It is used for code reuse in Single inheritace class of php


*/

trait Hello {
	public function hello(){
	   echo 'Hello';
	}
}

trait World {
	public function world(){
	   echo 'World';
	}
}

class MyWorld
{
    use Hello, World;
}

$world = new MyWorld();
echo $world->sayHello() . " " . $world->sayWorld(); //Hello World


/*Here we have two traits, Hello and World. Trait Hello is only able to say “Hello” and trait World can say “World”. 
In the MyWorld class we have applied Hello and World so that the MyWorld object will have methods from both traits and be able to say “Hello World”.*/

/* Traits Composed of Traits */

trait HelloWorld
{
    use Hello, World;
}

class MyWorld
{
    use HelloWorld;
}

$world = new MyWorld();
echo $world->sayHello() . " " . $world->sayWorld(); //Hello World

/*Here we have created the trait HelloWorld, using traits Hello and World, and included it in MyWorld. 
Since the HelloWorld trait has methods from the other two traits, 
it’s just the same as if we had including the two traits in the class ourselves. */

/*Conflict Resolution and Aliasing*/

trait Game
{
    function play() {
        echo "Playing a game";
    }
}

trait Music
{
    function play() {
        echo "Playing music";
    }
}

class Player
{
    use Game, Music;
}

$player = new Player();
$player->play();

/*Such trait conflicts aren’t resolved automatically for you. 
Instead, you must choose which method should be used inside the composing class using the keyword insteadof. */


class Player
{
    use Game, Music {
        Music::play insteadof Game;
    }
}

$player = new Player();
$player->play(); //Playing music