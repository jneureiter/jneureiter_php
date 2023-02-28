<!doctype html>
<html lang="de">
<head>
    <title>sue-php-jneureiter</title>
</head>
<body>

<div>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    const config = {
        type: 'pie',
        data: data,
    };

    new Chart(ctx, {
        const data = {
            labels: [
                'Bananen',
                'Birnen',
                'Äpfel'
            ],
            datasets: [{
                label: 'Lieferung',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };
    });
</script>
</body>
</html>

<?php
$vorname= 'Josef';
$nachname = 'Neureiter';

$benutzer = '';

echo "Vorname: $vorname <br/>";
echo "Nachname: $nachname<br />";
echo "Benutzer: $benutzer<br />";

?>
