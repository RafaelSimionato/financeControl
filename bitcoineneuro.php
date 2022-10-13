<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Bitcoin </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // First parameter of the constructor receives the API key
            $HGFinance = new HGFinance('71486043');//MY-KEY
            $finance = $HGFinance ->get();
            
            $var = $finance['currencies']['BTC']['variation'];
            
            echo "<h1>About Bitcoin </h1> ";
            echo "<h3>BTC (Bitcoin) <br>x<br> EUR (EURO) </h3>";
            echo "<br>";
            echo "01 Bitcoin (BTC) equals approximately &euro; ";
            //echo number_format($finance['currencies']['BTC']['buy'], 2);
            //echo "<br>";
            $c = $finance['currencies']['BTC']['buy'];
            $euro = $finance['currencies']['EUR']['buy'];            
            $t = $c / $euro;
            echo number_format($t, 2);
            echo " now ";
            echo "<br><br>";            
            echo "<br>";
            if ($finance['currencies']['BTC']['variation'] >= 0) {
                echo "Value rising ";
                echo "<font color='#006e00'>$var </font> % ";
            } else {
                echo "Falling value ";
                echo "<font color='#af0000'>$var </font> % ";
            }
            echo "<br><br> ";
            echo "<fieldset><div id='btctext'> <p>Bitcoin is a decentralized digital currency, not linked to banks or any type of administrator </p>
            <p>It can be sent from user to user through the (peer-to-peer) Bitcoin Network without any intermediary </p> </div></fieldset> ";
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