<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Libra Esterlina </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // Primeiro parametro do construtor recebe a chave da API
            $HGFinance = new HGFinance('71486043');//MINHA-CHAVE
            $finance = $HGFinance ->get();
            
            $var4 = $finance['currencies']['GBP']['variation'];
                        
            echo "<h1> Sobre a Libra Esterlina </h1>";            
            echo "<h3> GBP (Libra Esterlina) <br>x<br> BRL (Real brasileiro) </h3> ";
            echo "<br>";
            echo "&pound; 01 Libra equivale a R$ ";
            echo number_format($finance ['currencies']['GBP']['buy'], 2);
            echo " neste momento ";
            echo "<br><br> ";

            if ($finance['currencies']['GBP']['variation'] > 0) {
                echo "Valor subindo ";
                echo "<font color='#006e00'>$var4 </font> % ";
                
            } elseif ($finance['currencies']['GBP']['variation'] == 0) {
                echo "Variação estável em ";
                echo "<font color='#006e00'>$var4 </font> % <br><br>";
            } else {
                echo "Valor caindo ";
                echo "<font color='#af0000'>$var4 </font> % ";
            }                   
            echo "<br><br> ";
            echo "<fieldset><div id='gbp'><p>A Libra Esterlina, na lingua inglesa chamada de Pound, é a moeda oficial utilizada no Reino Unido </p>
            </div></fieldset> ";
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