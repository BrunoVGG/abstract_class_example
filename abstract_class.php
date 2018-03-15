<?php

abstract class Animal
{
    public $name;
    abstract protected function velocidade();
}

class Wolf extends Animal
{
    function __construct(){
        $this->name = "Lobo"; 
    }
    
    public function velocidade(){
        return 5;
    }
}

class Turtle extends Animal
{
    function __construct(){
        $this->name = "Tartaruga";
    }
    
    public function velocidade(){
        return 1;
    }
}

$myAnimal = new Turtle;

echo $myAnimal->velocidade()."<br>";
echo $myAnimal->name;
echo "<br>END<br><br>";

$myAnimal = new Wolf;

echo $myAnimal->velocidade()."<br>";
echo $myAnimal->name;
echo "<br>END<br>";