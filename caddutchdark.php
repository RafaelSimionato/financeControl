<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledark.css">
    <title>Canadese Dollar </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // First parameter of the constructor receives the API key
            $HGFinance = new HGFinance('71486043');//MY-KEY
            $finance = $HGFinance ->get();
            
            $var6 = $finance['currencies']['CAD']['variation'];                      
            
            echo "<h1>Over Canadese Dollar </h1>";            
            echo "<h3> CAD (Canadese Dollar) <br>x<br> EUR (Euro) </h3> ";
            echo "<br>";
            echo " C$ 01 Canadese Dollar (CAD) is gelijk aan ongeveer &euro; ";
            // echo number_format($finance ['currencies']['CAD']['buy'], 2);
            
            $c = $finance['currencies']['CAD']['buy'];
            $euro = $finance['currencies']['EUR']['buy'];            
            $t = $c / $euro;
            echo number_format($t, 2);
            echo " nu ";
            echo "<br><br> ";

            if ($finance['currencies']['CAD']['variation'] > 0) {
                echo "Waarde stijgt ";
                echo "<font color='#00d200'>$var6 </font> % <br><br>";
                
            } elseif ($finance['currencies']['CAD']['variation'] == 0) {
                echo "Stabiele variatie in ";
                echo "<font color='#303b3b'>$var6 </font> % <br><br>";
                echo "Geen significante beweging <br> ";
            } else {
                echo "Dalende waarde ";
                echo "<font color='#d01515'>$var6 </font> % <br><br>";
            }
            echo "<br> ";
            echo "<fieldset>
                    <div id='cad'>
                        <p>De Canadese Dollar is de officiële munteenheid van Canada </p>
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