<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledark.css">
    <title>Japanese Yen</title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // First parameter of the constructor receives the API key
            $HGFinance = new HGFinance('71486043');//MY-KEY
            $finance = $HGFinance ->get();
            
            $var8 = $finance['currencies']['JPY']['variation'];                      
            
            echo "<h1>About Japanese Yen</h1>";            
            echo "<h3> JPY (Japanese Yen) <br>x<br> USD (United States Dollar) </h3> ";
            echo "<br>";
            echo " $ 01 Japanese Yen (JPY) equals approximately $ ";
            // echo number_format($finance ['currencies']['JPY']['buy'], 2);

            $c = $finance['currencies']['JPY']['buy'];
            $dollar = $finance['currencies']['USD']['buy'];            
            $t = $c / $dollar;
            echo number_format($t, 2);
            echo " now ";
            echo "<br><br> ";

            if ($finance['currencies']['JPY']['variation'] > 0) {
                echo "Value rising ";
                echo "<font color='#5eff00'>$var8 </font> % <br><br>";
                
            } elseif ($finance['currencies']['JPY']['variation'] == 0) {
                echo "Stable variation in ";
                echo "<font color='#ffffff'>$var8 </font> % <br><br>";
                echo "No significant movement <br> ";
            } else {
                echo "Falling value ";
                echo "<font color='#ff0800'>$var8 </font> % <br><br>";
            }
            echo "<br> ";
            echo "<fieldset>
                    <div id='jpy'>
                        <p>The Japanese Yen is the official currency of Japan </p>
                    </div>
                  </fieldset> ";
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