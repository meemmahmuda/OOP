<?php

class Animal{
    public function eating(){
        return 'this is eating <br>';
    }
}

class Dog extends Animal{
    public function playing(){
        return 'this is playing <br>';
    }
}

$dog = new Dog;

echo $dog->playing();
echo $dog->eating();