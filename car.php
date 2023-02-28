<?php
class Car {

    public function __construct(public string $name){

    }

    public function getName(): string{
        return $this->name;
    }

}

$car = new Car('VW');
echo  "Auto: {$car->getName()}</br>";
