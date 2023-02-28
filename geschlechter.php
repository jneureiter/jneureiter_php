<html>
<head>
    <title>Geschlechter</title>
</head>
<body>
<div>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
$schule = array(
        array(
                'klasse'=> '4BHK',
                'm'=>13,
                'w'=>5,
        ),
        array(
            'klasse'=> '5BHK',
            'm'=>9,
            'w'=>12,
        )
);

    //Klassenname
    $klasse = [];
    for ($i=0; $i < count($schule); $i++){
        $klasse[] = $schule[$i]['klasse'];
    }

        $strKlasse = '"' . join('","', $klasse) . '"';


    // Jungs
    $klassem = [];
    for ($i=0; $i < count($schule); $i++){
        $klassem[] = $schule[$i]['m'];
    }

        $strKlassem = join(',', $klassem);

    // Mädchen
    $klassew = [];
    for ($i=0; $i < count($schule); $i++){
        $klassew[] = $schule[$i]['w'];
    }

        $strKlassew = join(',', $klassew);

?>

?>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?= $strKlasse?>],
            datasets: [{
                label: 'Jungs',
                data: [<?= $strKlassem ?>],
                borderWidth: 1
            }, {
                label: 'Mädchen',
                data: [<?= $strKlassew ?>],
                borderWidth: 1
            }]
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
