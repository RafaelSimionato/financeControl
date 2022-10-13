<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleclear.css">
    <title>Controle Financeiro </title>
</head>
<body>
    <header>
        <h1>Cotação de Moedas </h1>
        <h2>Consulte valores em tempo real </h2><br>
    </header>        
    <br>
    <article>
    <div id="current">
        <fieldset id="currency" name="currency">
            <p>Moeda corrente : <strong>Real Brasileiro (BRL)</strong> </p>
        </fieldset>
    </div>
    <br>
        <p id="p1"> Selecione a moeda de sua preferência </p> <br>
        <fieldset>            
            <div id="btc"><a href="bitcoinptbrcl.php">Bitcoin (BTC) </a> <br><br></div>
                <a href="dollarptbrcl.php">Dollar Americano (USD) </a> <br><br>
                <a href="europtbrcl.php">Euro (EUR) </a> <br><br>
                <a href="gbpptbrcl.php">Libra Esterlina (GBP) </a> <br><br>
                <a href="arsptbrcl.php">Peso Argentino (ARS) </a> <br><br>
                <a href="cadptbrcl.php">Dólar Canadense (CAD) </a> <br><br>
                <a href="audptbrcl.php"> Dólar Australiano (AUD) </a> <br><br>
                <a href="jpyptbrcl.php">Yen Japonês (JPY) </a>               
        </fieldset>
    </article>
    <br>
    <div id="lg">
        <p>Você gostaria de trocar o idioma desta página?</p>
        <strong>
            <a href="financecontrolthcl.php">Inglês Americano, </a>
            <a href="financecontroldutchclear.php">Holandês - Dutch, </a>
        </strong>
    </div>
    <br><br>
        <p>Alterar o tema do site</p>
        <div id="colors">
            <strong>
                <a href="financecontrolptbr.php">Original, </a>
                <a href="financecontrolptbrdk.php">Escuro, </a>
            </strong>
        </div>
    <br><br><br>
    <?php
        date_default_timezone_set('UTC');
        echo "<br>";
        echo date('l jS \of F Y h:i A');
    ?> <br><br> &copy; Powered by <strong>SoftDrakula</strong>
</body>
</html>