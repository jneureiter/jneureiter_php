<?php
function sayHello(){
    echo 'Hallo, Welt! <br />';
}

sayHello();
sayHello();

function greetPerson($name = "Fritz"){
    echo "Hallo, $name <br />";
}

greetPerson("Jana");
greetPerson("Josef");
greetPerson("Christoph");
greetPerson("Robin");
greetPerson(); // wenn in einer Doku eckige Klammern stehen, so bedeutet dies, dass der Wert optional ist.

/**
 * Um zu berechnen, werden Methoden/Funktionen
 * mit einem Rückgabewert benötigt
 */
function berechneBrutto($netto, $steuer = 20){
    $brutto = $netto * (1+$steuer/100);
    return $brutto;
}

$betrag1 = 50;
$steuer1 = 10;
$brutto1 = berechneBrutto($betrag1, $steuer1);
echo "Netto $betrag1 + $steuer1 % = $brutto1<br />";

$betrag2 = 50;
$brutto2 = berechneBrutto($betrag2);
echo "Netto $betrag2 + 20 % = $brutto2<br />";


echo "Bruttoberechner: <br/>";

// 50, 100, 60, 10, 20
$betraege = array(50, 100, 60, 10, 20);

foreach ($betraege as $betrag){
    $rand = mt_rand(0,1);
    $steuer = ($rand === 0) ? 10 : 20;
    $brutto = berechneBrutto($betrag, $steuer);

    echo "&euro; $betrag + $steuer % = &euro; $brutto<br />";
}

$steuer = 0;

switch($steuer) {
    case 0:
        echo "Die Steuer beträgt 10 %<br/>";
        break;
    case 1:
        echo "Die Steuer beträgt 20 %<br/>>";
        break;
    default:
        echo "Der Steuersatz ist in diesem Beispiel nicht möglich!<br/>";
}
