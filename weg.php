<?php

require 'Person.php';

use Neureiter\Person as MeinePerson;

    $person1 = new MeinePerson('Ralph', 'Lauren');
    $person2 = new MeinePerson('Johann', 'Messner');
    $person1->greet($person2);
    $person2->greet($person1);
    $person1->walk();
    $person2->walk();















