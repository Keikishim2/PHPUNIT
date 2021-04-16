<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Animal</title>
</head>
<style>

body{
    background-color: moccasin;
    font-size: large;
    font-weight: bolder;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: black;
    animation-name: example;
    animation-duration: 4s;
    background-repeat: no-repeat;
    background-size: cover;
}
@keyframes example {
    0%   {background-image: url('1.gif');}
    25%  {background-image: url('2.gif');}
    50%  {background-image: url('3.gif');}
    75%  {background-image: url('4.gif');}
    100% {background-image: url('5.gif');}
}
</style>
<?php
    class Animal
    {
        public $name;
        public $health;

        public function __construct()
        {
            $this->health = 100;
        }
        public function walk()
        {
            $this->health -= 1;
            echo "Walking... <br> ♥New health: " . $this->health . "<br>";
            return $this;
        }
        public function run()
        {
            $this->health -= 5;
            echo "Running... <br> ♥New health: " . $this->health . "<br>";
            return $this;
        }
        public function displayHealth()
        {
            $this->name = "Kei";
            return "»Name: " . $this->name . "<br> Health: " . $this->health . "<br>";
        }
    }
    $animal = new Animal();
    echo $animal->displayHealth()."<br>";
    $animal->walk()->walk()->walk()->run()->run();

    class Dog extends Animal
    {
        public function displayHealth()
        {
            $this->name = "Netzuko";
            $this->health = 150;
            echo "<br><br>»Name: " . $this->name . "<br> Health: " . $this->health . "<br>";
        }
        public function pet()
        {
            $this->health += 5;
            echo "Petting... Health +5 <br>";
            echo "♥New health: " . $this->health . "<br>";
            return $this;
        }
    }
    $dog = new Dog();
    echo $dog->displayHealth()."<br>";
    $dog->walk()->walk()->walk()->run()->run()->pet();

    class Dragon extends Animal
    {
        public function displayHealth()
        {
            echo "<br><br>This is a Dragon!<br>";
            $this->name = "Shoyo";
            $this->health = 170;
            echo "»Name: " . $this->name . "<br> ♥Health: " . $this->health . "<br>";
        }
        public function fly()
        {
            $this->health -= 10;
            echo "Flying~~~~ <br>♥New health: " . $this->health . "<br>";
            return $this;
        }
    }
    $dragon = new Dragon();
    echo $dragon->displayHealth()."<br>";
    $dragon->walk()->walk()->walk()->run()->run()->fly()->fly();
?>


</body>
</html>