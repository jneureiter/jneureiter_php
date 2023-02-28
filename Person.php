<?php

namespace Neureiter;

class Person
{
    /**
     * @param string $sname Ist der Vorname
     * @param string $lname Ist der Nachname
     */
    public function __construct(string $sname, string $lname)
    {
        $this->setName($sname, $lname);
    }


    private string $name = '';

    /**
     * This method returns the full name of the person.
     * @return string The full name of the person
     */
    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $sname, string $lname): void
    {
        $this->name = "$sname $lname";
    }


    /**
     * Let the Person walk
     * @return void
     */
    public  function  walk(): void
    {
        echo "Ich heiße $this->name und gehe...<br />";
    }

    /**
     * Let the person greet
     * @param Person $person The Person to greet
     * @return void
     */
    public  function  greet(Person $person): void
    {
        echo "Hallo $person->name, wie gehts? <br />";
    }
}