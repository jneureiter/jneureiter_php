<?php
    $autos = [
      ['Toyota','Yaris'],
      ['Honda','Civic'],
      ['Audi','A2'],
      ['Bmw','X5'],
      ['Ford','Mustang'],
      ['VW','Golf']

    ];

    //TODO: Warning
    //TODO: assoziative Arrays

    //var_dump($autos);

    for ($i=0; $i < count($autos); $i++){
        echo 'Auto: '.$autos[$i][0] . ' - ' .
        $autos[$i][1].' </br>';
    }

