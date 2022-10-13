<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Japanse Yen</title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // First parameter of the constructor receives the API key
            $HGFinance = new HGFinance('71486043');//MY-KEY
            $finance = $HGFinance ->get();
            
            $var8 = $finance['currencies']['JPY']['variation'];                      
            
            echo "<h1>Over Japanse Yen</h1>";            
            echo "<h3> JPY (Japanse Yen) <br>x<br> EUR (Euro) </h3> ";
            echo "<br>";
            echo " $ 01 Japanse Yen (JPY) is gelijk aan ongeveer &euro; ";
            // echo number_format($finance ['currencies']['JPY']['buy'], 2);

            $c = $finance['currencies']['JPY']['buy'];
            $euro = $finance['currencies']['EUR']['buy'];            
            $t = $c / $euro;
            echo number_format($t, 2);
            echo " nu ";
            echo "<br><br> ";

            if ($finance['currencies']['JPY']['variation'] > 0) {
                echo "Waarde stijgt ";
                echo "<font color='#006e00'>$var8 </font> % <br><br>";
                
            } elseif ($finance['currencies']['JPY']['variation'] == 0) {
                echo "Stabiele variatie in ";
                echo "<font color='#FF3F00'>$var8 </font> % <br><br>";
                echo "Geen significante beweging <br> ";
            } else {
                echo "Dalende waarde ";
                echo "<font color='#af0000'>$var8 </font> % <br><br>";
            }
            echo "<br> ";
            echo "<fieldset>
                    <div id='jpy'>
                        <p>De Japanse Yen is de officiële munteenheid van Japan </p>
                    </div>
                  </fieldset> ";
        ?> <br>
        <a href="javascript:history.go(-1)">Terug </a>
    </div> <br><br><br>
    <?php
        date_default_timezone_set('UTC');
        echo "<br>";
        echo date('l jS \of F Y h:i A');
    ?> <br><br>
    &copy; Powered by <strong>SoftDrakula</strong>
</body>
</html>