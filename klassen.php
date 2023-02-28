<html>
    <head>
        <title>Schülerzahlen</title>
    </head>
    <body>
    <div>
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <?php
    $schulerzahlen = [27, 23, 20, 18, 18];
    ?>

    <script>
        const ctx = document.getElementById('myChart');

        const myData = {
            labels: ['1. Jg.','2. Jg','3. Jg','4. Jg','5. Jg'],
            datasets: [{
                label: 'Schüler:innen-Zahlen',
                data: [
                    // das soll im Array stehen
                    // 27, 23, 20, 18, 18

                    //1. Möglichkeit
                    <?= implode(',', $schulerzahlen);?>

                    /*2. Möglichkeit
                    <?php

                    foreach ($schulerzahlen as $zahl){
                        echo $zahl.', ' ;

                    }
                    ?>
                    */
                    /*3. Möglichkeit
                    <?= $schulerzahlen[0] ?>,
                    <?= $schulerzahlen[1] ?>,
                    <?= $schulerzahlen[2] ?>,
                    <?= $schulerzahlen[3] ?>,
                    <?= $schulerzahlen[4] ?>,
                    */
                    // Alle 3 Möglichkeiten machen genau das gleiche.

                ],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        new Chart(ctx, {
            type: 'line',
            data: myData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

            const config = {
                type: 'line',
                data: myData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart.js Line Chart'
                        }
                    }
                },
            };

    </script>
    </body>
</html>


