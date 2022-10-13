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
            // Primeiro parametro do construtor recebe a chave da API
            $HGFinance = new HGFinance('71486043');//MINHA-CHAVE
            $finance = $HGFinance ->get();
            
            $var2 = $finance['currencies']['USD']['variation'];                      
            
            echo "<h1>Sobre o Dólar </h1>";            
            echo "<h3> USD (United States Dollar) <br>x<br> BRL (Real Brasileiro) </h3> ";
            echo "<br>";
            echo " $ 01 Dólar (USD) equivale a R$ ";
            echo number_format($finance ['currencies']['USD']['buy'], 2);
            echo " neste momento ";
            echo "<br><br> ";

            if ($finance['currencies']['USD']['variation'] > 0) {
                echo "Valor subindo ";
                echo "<font color='#006e00'>$var2 </font> % <br><br>";
                
            } elseif ($finance['currencies']['USD']['variation'] == 0) {
                echo "Variação estável em ";
                echo "<font color='#f0f0f1'>$var2 </font> % <br>";
                echo "Nenhuma movimentação significativa <br> ";
            } else {
                echo "Valor caindo ";
                echo "<font color='#ff0000'>$var2 </font> % <br><br>";
            }
            echo "<br> ";
            echo "<fieldset><div id='usd'><p>O Dólar e a moeda oficial de mais de 20 países </p>
            <p> Porém aqui, neste caso, os valores são referentes ao dólar dos Estados Unidos da América </p></div></fieldset> ";
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