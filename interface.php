<?php

interface Person{
    public function introduction();
}

interface Programmer{
    public function knowledge();
}

class Student implements Person, Programmer{
    public function introduction(){
        return "hello i am meem";
    }
    public function knowledge(){
        return "hello i am programmer";
    }
}

$stu = new Student;

echo $stu -> introduction();
echo "\n";
echo $stu -> knowledge();