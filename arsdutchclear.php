<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleclear.css">
    <title>Argentijnse Peso </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // First parameter of the constructor receives the API key
            $HGFinance = new HGFinance('71486043');//MY-KEY
            $finance = $HGFinance ->get();
            
            $var5 = $finance['currencies']['ARS']['variation'];                      
            
            echo "<h1>Over Argentijnse Peso </h1>";            
            echo "<h3> ARS (Argentijnse Peso) <br>x<br> EUR (Euro) </h3> ";
            echo "<br>";
            echo " $ 01 Peso (ARS) is gelijk aan ongeveer &euro; ";
            // echo number_format($finance ['currencies']['ARS']['buy'], 2);
            
            $c = $finance['currencies']['ARS']['buy'];
            $euro = $finance['currencies']['EUR']['buy'];            
            $t = $c / $euro;
            echo number_format($t, 2);
            echo " nu ";
            echo "<br><br> ";

            if ($finance['currencies']['ARS']['variation'] > 0) {
                echo "Waarde stijgt ";
                echo "<font color='#006e00'>$var5 </font> % <br><br>";
                
            } elseif ($finance['currencies']['ARS']['variation'] == 0) {
                echo "Stabiele variatie in ";
                echo "<font color='#FF3F00'>$var5 </font> % <br><br>";
                echo "Geen significante beweging <br> ";
            } else {
                echo "Dalende waarde ";
                echo "<font color='#af0000'>$var5 </font> % <br><br>";
            }
            echo "<br> ";
            echo "<fieldset>
                    <div id='ars'><p>De Argentijnse Peso is de officiële munteenheid van Argentinië </p>
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