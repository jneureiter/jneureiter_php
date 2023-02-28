<?php

    $wochentag= date('N');
    echo "<br /> Wochentag $wochentag <br />";

    $resttage = 7-$wochentag;
    echo "Die Woche hat noch $resttage Tage <br />";

    //Ferienbeginn
    // 8. Juli 2023


    // Man kann den Tag selber eingeben

    $tag = 1;

    $vorhanden = array_key_exists('tag', $_GET);

    if(!$vorhanden){
        $checktag = (int)$_GET['tag'];
        if($checktag > 0 && $checktag < 32){
            $tag = (int)$_GET['tag'];
        }
    }

    $enddatum = date('z',mktime(
        0,
        0,
        0,
        7,
        $tag,
        2023
    ));

    $dauer = $enddatum - $tag;
    echo "Es dauert noch so viele Tage: $dauer <br/>" ;

   /*
    if(isset($tag)){
        $tag = 8;
    }
    */

    // Man kann keinen Tag eingeben
    $heute = date('z');

    $ferienbeginn = date('z',mktime(
        0,
        0,
        0,
        7,
        8,
        2023
    ));

    $tage =  ($ferienbeginn - $heute);

    echo "Es sind noch $tage Tage bis zum 8. Juli 2023: <br/>";