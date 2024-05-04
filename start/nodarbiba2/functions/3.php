<?php

class Person
{
    public $name;
    public $surname;
    public $age;

    function __construct(string $name, string $surname, int $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    function legalAge(): string
    {
        if ($this->age < 18) {
            return $this->age . ": You are not old enough.\n";
        } else {
            return $this->age . ": You are old enough. \n";
        }
    }
}

$human = new Person('John', 'Kennedy', 18);
echo $human->legalAge();