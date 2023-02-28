<?php

require 'Auto.php';

use Neureiter\Auto;
// @include 'Auto1.php';

    $auto = new Auto('rosa');
    $auto->fahre(); // Zugriff auf Methode mittels ->

    echo 'Farbe des Autos: ' . $auto->getFarbe() . '<br/>';

    $auto->setFarbe('grün');
    echo 'Farbe des Autos:' . $auto->getFarbe() . '<br/>';

    $vw = new Auto('gelb');
    $vw->setFarbe('lila');
?>


<h1>Autos fahren</h1>
<?php
    $autos = [];
    $autos[] = $vw;
    $autos[] = $auto;

    foreach ($autos as $auto){
        $auto->fahre();
    }

