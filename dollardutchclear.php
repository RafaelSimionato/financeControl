<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleclear.css">
    <title>Dollar </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // First parameter of the constructor receives the API key
            $HGFinance = new HGFinance('71486043');//MY KEY
            $finance = $HGFinance ->get();
            
            $var3 = $finance['currencies']['USD']['variation'];
            
            echo "<h1> Over Amerikaanse Dollar </h1>";            
            echo "<h3> USD (Amerikaanse Dollar) <br>x<br> EUR (Euro) </h3> ";
            echo "<br>";
            echo "&dollar; 01 Dollar is gelijk aan ongeveer &euro; ";
            // echo number_format($finance ['currencies']['USD']['buy'], 2);
            
            $c = $finance['currencies']['USD']['buy'];
            $euro = $finance['currencies']['EUR']['buy'];            
            $t = $c / $euro;
            echo number_format($t, 2);
            echo " nu ";
            echo "<br><br> ";

            if ($finance['currencies']['USD']['variation'] > 0) {
                echo "Waarde stijgt ";
                echo "<font color='#006e00'>$var3 </font> % ";
                
            } elseif ($finance['currencies']['USD']['variation'] == 0) {
                echo "Stabiele variatie in ";
                echo "<font color='#303b3b'>$var3 </font> % <br>";
                echo "Geen significante beweging <br> ";
            } else {
                echo "Dalende waarde ";
                echo "<font color='#af0000'>$var3 </font> % ";
            }
            echo "<br><br> ";
            echo "<fieldset><div id='usd'><p>De Dollar is de officiële munteenheid van meer dan 20 landen </p> <p>Maar hier, in dit geval, verwijzen de waarden naar de Amerikaanse Dollar </p>
            </div></fieldset> ";
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