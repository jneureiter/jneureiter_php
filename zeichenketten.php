<html>
<head>
    <title>Zeichenketten</title>
</head>
    <body>
        <?php
            $vorname = 'Josef';
            $nachname = 'Neureiter';

            // . dient zur Zeichenkettenverknüpfen
            $name = $vorname .' '. $nachname;

            echo "Der Name lautet: $name<br />";

        /**
         * Arbeit mit Zeichenketten
         */
            $wetter = ' Heute schneit es. ';

            // strlen => Anzahl der Zeichen in der Zeichenkette
            $anzahl = strlen($wetter);
            echo "Anzahl: $anzahl<br />";
            //TODO: strlen in php.net suchen
            //www.php.net/strlen

            /**
             * Exkurs - Zeichen mit mehreren Bytes
             */
            $anzahlMb = mb_strlen($wetter);
            echo "Anzahl mb: $anzahlMb<br />";
            /**
             * Exkurs Ende
             */

            $wetterOhneW = trim($wetter);
            echo "Das Wetter ohne White Spaces: $wetterOhneW<br />";
            $wetterOhneWAnzahl = strlen($wetterOhneW);
            echo "Anzahl der Zeichen: $wetterOhneWAnzahl<br />";

            $adresse = 'XYZ ';
            echo 'Die Anzahl der Buchstaben ' .
                strlen(trim($adresse)) . '<br />';


            $wetterG = strtoupper($wetterOhneW);
            echo "Wetter in Großbuchstaben: $wetterG<br />";
            $wetterK = strtolower($wetterOhneW);
            echo "Wetter in Kleinbuchstaben: $wetterK<br />";
        ?>

        <h1>Teilzeichenketten & Zeichen suchen</h1>
        <?php
            $heute = strtolower(substr($wetterOhneW, 0, 5));
            echo "Heute: $heute<br />";

            $pos =  strpos($wetterOhneW, 'e');
            echo "Position: $pos<br />";

        /**
         * !!! WICHTIG !!!
         * strpos gibt in oder bool zurück. Mit === wird
         * ein Vergleich inkl. Datentypüberprüfung durchgeführt!
         */
            if ($pos === false){
                echo 'Das Zeichen wurde nicht gefunden.<br />';
            }
            else{
                echo "Position: $pos<br />";
            }


            $zahl = 0;

            if($zahl == 0){
                echo "Zahl ist 0.<br />";
            }

            if ($zahl == false){
                echo "Zahl ist falsch<br />";
            }

            $zahl1 = (bool)0;

            if ($zahl1 === false){
                echo 'Die Zahl ist ein Wahrheitswert.<br />';
            }
        ?>
    </body>
</html>



