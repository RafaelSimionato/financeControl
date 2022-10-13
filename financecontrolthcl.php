<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleclear.css">
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
            
            <div id="btc"><a href="bitcoincl.php">Bitcoin (BTC) </a> <br><br></div>
                <a href="realencl.php">Brazilian Real (BRL) </a> <br><br>
                <a href="euroencl.php">Euro (EUR) </a> <br><br>
                <a href="gbpencl.php">British Pound (GBP) </a> <br><br>
                <a href="arsencl.php">Argentinian peso (ARS) </a> <br><br>
                <a href="cadencl.php">Canadian Dollar (CAD) </a> <br><br>
                <a href="audencl.php">Australian Dollar (AUD) </a> <br><br>
                <a href="jpyencl.php">Japanese Yen (JPY) </a>               
        </fieldset>
    </article>
    <br>
    <div id="lg">
        <p>Would you like to change the language of this page?</p>
        <fieldset id="language">
            <a href="financecontrolptbrcl.php">Brazilian portuguese, </a>
            <a href="financecontroldutchclear.php">Netherlands - Dutch, </a>
        </fieldset>
        
    </div>
    <br><br><br>
    <div id="color">
        <p>Or change the theme of the site?</p>
        <fieldset id="color">
            <a href="financecontrol.php">Original, </a>
            <a href="financecontrolendk.php">Dark, </a>
        </fieldset>
        
    </div>
    <br><br><br>
    <?php
        date_default_timezone_set('UTC');
        echo "<br>";
        echo date('l jS \of F Y h:i A');
    ?> <br><br> &copy; Powered by <strong>SoftDrakula</strong>
</body>
</html>