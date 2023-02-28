<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-50 dark:bg-gray-800 p-3">
        <h1 class="dark:text-gray-50 text-xl md:text-4xl lg:text-8xl">
            Hello world!
        </h1>
        <p class="text-amber-500 dark:text-gray-50 ">
            Lorem ipsum dolor sit amet
        </p>

        <p class="bg-emerald-300 p-4 mt-4">
            Lorem ipsum dolor sit amet
        </p>
        <p class="dark:text-gray-50 mt-6 font-medium">
            Das ist ein Test.
        </p>

        <div class="flex justify-between mb-6">
            <div class="dark:text-gray-50 bg-red-500 p-6">01</div>
            <div class="dark:text-gray-50 bg-slate-600 p-6">02</div>
            <div class="dark:text-gray-50 bg-fuchsia-400 p-6">03</div>
        </div>

        <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
            <div class="dark:text-gray-50 bg-red-500 md:rounded-md p-6">01</div>
            <div class="dark:text-gray-50 bg-slate-600 md:rounded-md p-6">02</div>
            <div class="dark:text-gray-50 bg-fuchsia-400 md:rounded-md p-6">03</div>
        </div>

        <div style="width: 50px;" class="bg-red-700 h-4 mt-3">
            <div>

            </div>
        </div>

        <div class="dark:text-gray-50">
            <h1 class="text-xl md:text-4xl lg:text-8xl mt-3">
                Provisionen
            </h1>

            <div>
                <h3 class="lg:text-4xl mt-5">
                    Angestellter 1
                </h3>
                <p class="lg:text-4xl mt-5">
                    Provision:
                </p>

                <?php
                $gehalt1 = 999.00;
                $provision1 = 0.1;
                $provisionip1 = $provision1*100;

                $erg1 = $gehalt1*$provision1;

                $maxlänge1 = 200;
                $längeprovision1 = $maxlänge1 / $gehalt1 * $erg1;

                echo "Gehalt: $gehalt1 EUR<br />";
                echo "Provision in €: $erg1 EUR<br />";
                echo "Provision in %: $provisionip1 %<br />";

                ?>
                <div style="width: <?php echo $maxlänge1?>px" class="bg-green-700 h-4 mt-3"></div>
                <div style="width: <?php echo $längeprovision1?>px" class="bg-blue-700 h-4 mt-3"></div>

            </div>

            <div>
                <h3 class="lg:text-4xl mt-5">
                    Angestellter 2
                </h3>
                <p class="lg:text-4xl mt-5">
                    Provision:
                </p>

                <?php
                $gehalt2 = 875.50;
                $provision2 = 0.15;
                $provisionip2 = $provision2*100;

                $erg2 = $gehalt2*$provision2;

                $maxlänge2 = 200;
                $längeprovision2 = $maxlänge2 / $gehalt2 * $erg2;

                echo "Gehalt: $gehalt2 EUR<br />";
                echo "Provision in €: $erg2 EUR<br />";
                echo "Provision in %: $provisionip2 %<br />";

                ?>
                <div style="width: <?php echo $maxlänge2?>px" class="bg-green-700 h-4 mt-3"></div>
                <div style="width: <?php echo $längeprovision2?>px" class="bg-blue-700 h-4 mt-3"></div>

            </div>
        </div>





    </body>
</html>

