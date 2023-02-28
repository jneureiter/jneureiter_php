<?php
$zahlen = [2,5];


$zahlen[0] = 3;// das erste Element wird ersetzt mit 3
$zahlen[] = 10;// ein Element wird hinzugefügt

unset($zahlen[0]);// Das 0. Element wird geläscht es existieren nur mehr 1 und 2

$zahlen = array_values($zahlen);// array_values ... nimmt die Elemente im angegebenen Array
                                // und beginnt die Zählung wieder bei 0

$count = 0;
while($count < sizeof($zahlen)){

    echo $zahlen[$count] . '<br/>';
    $count++;
}


print_r($zahlen);
