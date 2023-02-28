<?php

    $person = array(
        'vorname' => 'Josef',
        'nachname' => 'Neureiter'
    );

    echo 'Vorname der Person: ' . $person['vorname'];

    $conf = array(
        'server' => array(
            'name' => 'localhost',
            'proto' => 'http',
            'port' => 8080
        )
    );

    $conf['user'] = array(
        'username' => 'max',
        'passwd' => 'geheim123'
    );

$conf['user']['passwd'] = 'geheim123';

    //Port ausgeben
    echo $conf['server']['port'];
    echo '<br />';
    echo $conf['user']['passwd'];

    if($conf['user']['passwd'] == 'geheim'){
        echo 'Zugriff erlaubt';
    }
    else{
        echo 'Zugriff verweigert';
    }