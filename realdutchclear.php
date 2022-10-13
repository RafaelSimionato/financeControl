<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleclear.css">
    <title>Braziliaanse Real </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // First parameter of the constructor receives the API key
            $HGFinance = new HGFinance('71486043');//MY-KEY
            $finance = $HGFinance ->get();
            
            $var2 = $finance['currencies']['EUR']['variation'];                      
            
            echo "<h1>Over Braziliaanse Real </h1>";            
            echo "<h3> BRL (Braziliaanse Real) <br>x<br> EUR (Euro) </h3> ";
            echo "<br>";
            echo " R$ 01 Braziliaanse real (BRL) is gelijk aan ongeveer &euro; ";
            // echo number_format($finance ['currencies']['EUR']['buy'], 2);

            $c = $finance['currencies']['EUR']['buy'];       
            $t = 1 / $c;
            echo number_format($t, 2);
            echo " nu ";
            echo "<br><br> ";

            if ($finance['currencies']['EUR']['variation'] > 0) {
                echo "Waarde stijgt ";
                echo "<font color='#006e00'>$var2 </font> % <br><br>";
                
            } elseif ($finance['currencies']['EUR']['variation'] == 0) {
                echo "Stabiele variatie in ";
                echo "<font color='#303b3b'>$var2 </font> % <br>";
                echo "Geen significante beweging <br> ";
            } else {
                echo "Dalende waarde ";
                echo "<font color='#af0000'>$var2 </font> % <br><br>";
            }
            echo "<br> ";
            echo "<fieldset><div id='usd'><p>De Real is de officiële munteenheid van Brazilië </p>
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