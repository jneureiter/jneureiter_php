<?php
use Jneureiter\Usermanagement\User;


require 'vendor/autoload.php';


$user = new User();
echo $user->setFname("Josef")
            ->setLname("Neureiter")
            ->constructUsername()
            ->getValue();