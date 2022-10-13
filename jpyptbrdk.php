<!DOCTYPE html>
<html lang="pt-BR">
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
            // Primeiro parametro do construtor recebe a chave da API
            $HGFinance = new HGFinance('71486043');//MINHA-CHAVE
            $finance = $HGFinance ->get();
            
            $var8 = $finance['currencies']['JPY']['variation'];                      
            
            echo "<h1>Sobre o YEN Japonês </h1>";            
            echo "<h3> JPY (Japanese Yen) <br>x<br> BRL (Real Brasileiro) </h3> ";
            echo "<br>";
            echo " ¥ 01 Yen Japonês (JPY) equivale a R$ ";
            echo number_format($finance ['currencies']['JPY']['buy'], 2);
            echo "<br>";
            echo " neste momento ";
            echo "<br><br> ";

            if ($finance['currencies']['JPY']['variation'] > 0) {
                echo "Valor subindo ";
                echo "<font color='#5eff00'>$var8 </font> % <br><br>";
                
            } elseif ($finance['currencies']['JPY']['variation'] == 0) {
                echo "Variação estável em ";
                echo "<font color='#303b3b'>$var8 </font> % <br><br>";
            } else {
                echo "Valor caindo ";
                echo "<font color='#ff0800'>$var8 </font> % <br><br>";
            }
            echo "<br> ";
            echo "<fieldset>
                    <div id='jpy'>
                        <p>O Yen Japonês é a moeda oficial do Japão </p>
                    </div>
                  </fieldset> ";
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