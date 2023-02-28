<!doctype html>
<html>
    <head>
        <title>Provision</title>
    </head>
    <body>
    <?php
        $zahl = mt_rand(1, 20);
        $zahl2 = mt_rand(1, 20);

    ?>

        <div>
            <canvas id="myChart"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: 'of Votes',
                        data: [<?= $zahl ?>, 19, 3, 5, 2, 3],
                        borderWidth: 1
                    }, {
                        label: 'of Test',
                        data: [<?= $zahl2 ?>,7,8,2,11,16],
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
