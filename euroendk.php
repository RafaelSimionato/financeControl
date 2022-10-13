<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledark.css">
    <title>Euro </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // First parameter of the constructor receives the API key
            $HGFinance = new HGFinance('71486043');//MY KEY
            $finance = $HGFinance ->get();
            
            $var3 = $finance['currencies']['EUR']['variation'];
            
            echo "<h1> About Euro </h1>";            
            echo "<h3> EUR (Euro) <br>x<br> USD (United States Dollar) </h3> ";
            echo "<br>";
            echo "&euro; 01 Euro equals approximately $ ";
            // echo number_format($finance ['currencies']['EUR']['buy'], 2);
            
            $c = $finance['currencies']['EUR']['buy'];
            $dollar = $finance['currencies']['USD']['buy'];            
            $t = $c / $dollar;
            echo number_format($t, 2);
            echo " now ";
            echo "<br><br> ";

            if ($finance['currencies']['EUR']['variation'] > 0) {
                echo "Value rising ";
                echo "<font color='#5eff00'>$var3 </font> % ";
                
            } elseif ($finance['currencies']['EUR']['variation'] == 0) {
                echo "Stable variation in ";
                echo "<font color='#ffffff'>$var3 </font> % <br>";
                echo "No significant movement <br> ";
            } else {
                echo "Falling value ";
                echo "<font color='#ff0800'>$var3 </font> % ";
            }
            echo "<br><br> ";
            echo "<fieldset><div id='eur'><p>The Euro is the official currency used in 19 of the 27 countries belonging to the European Union </p> <p><strong>Austria, Belgium, Cyprus, Estonia, Finland, France, Germany, Greece, Ireland, Italy, Latvia, Lithuania, Luxembourg, Malta, Netherlands, Portugal, Slovakia, Slovenia and Spain</strong> </p> <p>These countries form the well-known 'Euro Zone' and or 'Euro Area' </p>
            </div></fieldset> ";
        ?> <br>
        <a href="javascript:history.go(-1)">Back </a>
    </div> <br><br><br>
    <?php
        date_default_timezone_set('UTC');
        echo "<br>";
        echo date('l jS \of F Y h:i A');
    ?> <br><br>
    &copy; Powered by <strong>SoftDrakula</strong>
</body>
</html>