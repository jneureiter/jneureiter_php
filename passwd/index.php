<?php

use Jneureiter\Passwd\Password;

require 'vendor/autoload.php';

$pass = new Password();
$pass->addRandomNumber();
$pass->setRandomStringAmount(10);
$pass->addRandomString();
echo $pass->getValue();
?>
<br/>
<?php
$pass2 = new Password();
echo $pass2 ->addRandomNumber()
            ->setRandomStringAmount(6)
            ->addRandomString()
            ->getValue();
?>
<br/>
<?php
echo (new Password())->addRandomString()->getValue();
