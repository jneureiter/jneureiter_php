<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
</head>
<body>
<?php

// Übung 1

    $name = 'Max Muster';
    $pos = strpos($name,' ');

    if ($pos != false){
        $nachname = substr($name, $pos +1);
        $nachname = strtoupper($nachname);
        echo "Name: $name <br />";
        echo "Nachname: $nachname<br />";
    }


// Übung 2

    $zahlen = array(2, 3, 4, 5, 6);

    for ($i = 0; $i<count($zahlen); $i++){
        if ($zahlen[$i] % 2 == 0){
            echo "$zahlen[$i]";
        }
    }
// das % 2 == 0 steht dafür das wenn man die Zahl durch 2 dividiert soll 0 Rest heraus kommen


// Übung 3


?>

<div>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
    $year = date('Y');
    $anzahlAuswertung = 8;
    $yearTo = $year - $anzahlAuswertung; //=2015

    $labels = [];

    for ($i = $yearTo; $i<=$year; $i++){
        $labels [$i];
    }

    $labels = join(',', $labels);
    $kursAnzahl = 4;

?>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?= $labels ?>],
            datasets: [
                <?php

                    for ($i = 0; $i < $kursAnzahl; $i++){
                        $zufallszahlen = array();

                        for($j = 0; $j <= $anzahlAuswertung; $j++){
                            $zufallszahlen[] = mt_rand(1,100);
                        }

                        $zufallszahlen = join(',', $zufallszahlen);

                        echo "{label: 'Kurs " . $i + 1 . "', data: [$zufallszahlen], borderWidth: 1},";
                    }

                ?>
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>

