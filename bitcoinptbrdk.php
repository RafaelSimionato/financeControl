<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledark.css">
    <title>Bitcoin </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // Primeiro parametro do construtor recebe a chave da API
            $HGFinance = new HGFinance('71486043');//MINHA-CHAVE
            $finance = $HGFinance ->get();
            
            $var = $finance['currencies']['BTC']['variation'];
            
            echo "<h1>Sobre o Bitcoin </h1> ";
            echo "<h3>BTC (Bitcoin) <br>x<br> BRL (Real Brasileiro) </h3>";
            echo "<br>";
            echo "01 Bitcoin (BTC) equivale a R$ ";
            echo number_format($finance['currencies']['BTC']['buy'], 2);
            echo "<br>";
            echo " neste momento ";
            echo "<br><br>";
            if ($finance['currencies']['BTC']['variation'] > 0) {
                echo "Valor subindo ";
                echo "<font color='#5eff00'>$var </font> % ";
            } elseif ($finance['currencies']['BTC']['variation'] == 0) {
                echo "Variação estável em ";
                echo "<font color='#303b3b'>$var </font> % <br>";
                echo "Nenhuma movimentação significativa <br> ";
            } else {
                echo "Valor caindo ";
                echo "<font color='#ff0800'>$var </font> % ";
            }
            echo "<br><br> ";
            echo "<fieldset><div id='btctext'> <p>Bitcoin é uma moeda digital descentralizada, sem vínculo com bancos e ou qualquer tipo de administrator </p>
            <p>Ela pode ser enviada de usuario para usuario através do (peer-to-peer) Bitcoin Network sem qualquer tipo de intermediario </p> </div></fieldset> ";
        ?> <br>
        <a href="javascript:history.go(-1)">Voltar </a>
    </div> <br><br><br>
    <?php
        date_default_timezone_set('UTC');
        echo "<br>";
        echo date('l jS \of F Y h:i A');
    ?> <br><br>
    &copy; Powered by <strong>SoftDrakula</strong>
</body>
</html>