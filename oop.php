<?php

class Student{
    public $name;
    public $age;
    public $class;

    function getStudentInfo(){
        echo "name :"  . $this-> name . "age : "  . $this-> age. " class :" . $this-> class;
    }
    // public function setName($name){

    // }
}

$stu1 = new Student();
$stu1 -> name = "Meem ";
$stu1 -> age =  25 ;
$stu1 -> class = " php ";
$stu1 -> getStudentInfo();