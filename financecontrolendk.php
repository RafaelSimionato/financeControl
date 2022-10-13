<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledark.css">
    <title>Finance Control </title>
</head>
<body>
    <header>       
        <h1>Currency Quote </h1>
        <h2>Real-time values </h2><br>
    </header>
    <br>
    <article>
    <div id="current">
        <fieldset id="currency" name="currency">
            <p>Current currency : <strong>American Dollar (USD)</strong> </p>
        </fieldset>
    </div>
    <br>
        <p id="p1"> Select your preferred currency </p> <br>
        <fieldset>            
            <div id="btc"><a href="bitcoinendk.php">Bitcoin (BTC) </a> <br><br></div>
                <a href="realendk.php">Brazilian Real (BRL) </a> <br><br>
                <a href="euroendk.php">Euro (EUR) </a> <br><br>
                <a href="gbpendk.php">British Pound (GBP) </a> <br><br>
                <a href="arsendk.php">Argentinian peso (ARS) </a> <br><br>
                <a href="cadendk.php">Canadian Dollar (CAD) </a> <br><br>
                <a href="audendk.php">Australian Dollar (AUD) </a> <br><br>
                <a href="jpyendk.php">Japanese Yen (JPY) </a>               
        </fieldset>
    </article>
    <br>
        <p>Would you like to change the language of this page?</p>
        <div id="language">
            <strong>
                <a href="financecontrolptbrdk.php">Brazilian portuguese, </a>
                <a href="financecontroldutchdark.php">Netherlands - Dutch, </a>
            </strong>    
        </div>
    <br><br>
        <p>Or change the theme of the site?</p>
        <div id="colors">
            <strong>
                <a href="financecontrolthcl.php">Light, </a>
                <a href="financecontrol.php">Original, </a>
            </strong>
        </div>
    <br><br><br>
    <?php
        date_default_timezone_set('UTC');
        echo "<br>";
        echo date('l jS \of F Y h:i A');
    ?> <br><br> 
    <footer>
        &copy; Powered by <strong>SoftDrakula</strong>
    </footer>
</body>
</html>