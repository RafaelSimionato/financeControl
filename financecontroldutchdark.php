<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledark.css">
    <title>Financiële controle </title>
</head>
<body>
    <header>        
        <h1>Valutacitaat </h1>
        <h2>Realtime waarden </h2><br>
    </header>        
    <br>
    <article>
    <div id="current">
        <fieldset id="currency" name="currency">
            <p>Huidige valuta : <strong>Euro (EUR)</strong> </p>
        </fieldset>
    </div>
    <br>
    <p id="p1"><strong>Selecteer uw voorkeursvaluta</strong> </p>
        <fieldset>
            <div id="btc"><a href="bitcoindutchdark.php">Bitcoin (BTC) </a> <br><br></div>
                <a href="realdutchdark.php">Braziliaanse Real (BRL) </a> <br><br>
                <a href="dollardutchdark.php">Amerikaanse Dollar (USD) </a> <br><br>
                <a href="gbpdutchdark.php">Britse Pond (GBP) </a> <br><br>
                <a href="arsdutchdark.php">Argentijnse Peso (ARS) </a> <br><br>
                <a href="caddutchdark.php">Canadese Dollar (CAD) </a> <br><br>
                <a href="auddutchdark.php">Australische Dollar (AUD) </a> <br><br>
                <a href="jpydutchdark.php">Japanse Yen (JPY) </a>
        </fieldset>
    </article>
    <br>
        <p>Wilt u de taal van deze pagina wijzigen? </p>
        <div id="language">
            <strong>
                <a href="financecontrolptbrdk.php">Braziliaans Portugees, </a>
                <a href="financecontrolendk.php">Amerikaans Engels, </a>
            </strong>
        </div>
    <br><br>
        <p>Of het thema van de site wijzigen? </p>
        <div id="colors">
            <strong>
                <a href="financecontroldutchclear.php">Licht, </a>
                <a href="financecontroldutch.php">Origineel, </a>
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