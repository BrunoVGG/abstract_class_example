<?php

abstract class Animal
{
    public $name;
    abstract protected function speed($way);
}

class Wolf extends Animal
{
    function __construct(){
        $this->name = "Lobo"; 
    }
    
    public function speed($way){
        if($way == "run"){
            return 5;
        } else if($way == "fly"){
            return 0; 
        } else if($way == "swim"){
            return 2;
        } 
    }
}

class Turtle extends Animal
{
    function __construct(){
        $this->name = "Tartaruga";
    }    
    
    public function speed($way){
        if($way == "run"){
            return 1;
        } else if($way == "fly"){
            return 0; 
        } else if($way == "swim"){
            return 3;
        } 
    }
}

class Eagle extends Animal
{
    function __construct(){
        $this->name = "Eagle";
    }    
    
    public function speed($way){
        if($way == "run"){
            return 1;
        } else if($way == "fly"){
            return 8; 
        } else if($way == "swim"){
            return 0;
        } 
    }
}

$myAnimal = new Turtle;

echo $myAnimal->name."<br>";
echo "Speed to swim: ".$myAnimal->speed("swim");
echo "<hr><br>";

$myAnimal = new Wolf;

echo $myAnimal->name."<br>";
echo "Speed to run: ".$myAnimal->speed("run");
echo "<hr><br>";

$myAnimal = new Eagle;

echo $myAnimal->name."<br>";
echo "Speed to fly: ".$myAnimal->speed("fly");
echo "<hr><br>";