<?php

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        return "Hi, my name is {$this->name} and I'm {$this->age} years old.";
    }
}

$malePerson = new Person('Ralf', 35);
echo $malePerson->introduce();

$femalePerson = new Person('Mina', 24);
echo '<br/>'.$femalePerson->introduce();