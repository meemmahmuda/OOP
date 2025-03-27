<?php

class Person {
    public function introduction(){
        return "Hello i am a person";
    }
}

class Student extends Person{
    public function introduction(){
        return "Hello i am a student";
    }
}

class Employee extends Person{
    public function introduction(){
        return "Hello i am a employee \n";
    }
}

function introducePerson(Person $person){
    return $person->introduction();
}

echo introducePerson(new Employee);
echo introducePerson(new Student);