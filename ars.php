<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Peso Argentino </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // Primeiro parametro do construtor recebe a chave da API
            $HGFinance = new HGFinance('71486043');//MINHA-CHAVE
            $finance = $HGFinance ->get();
            
            $var5 = $finance['currencies']['ARS']['variation'];                      
            
            echo "<h1>Sobre o Peso Argentino </h1>";            
            echo "<h3> ARS (Argentine Pesos) <br>x<br> BRL (Real Brasileiro) </h3> ";
            echo "<br>";
            echo " $ 01 Peso (ARS) equivale a R$ ";
            echo number_format($finance ['currencies']['ARS']['buy'], 2);
            echo " neste momento ";
            echo "<br><br> ";

            if ($finance['currencies']['ARS']['variation'] > 0) {
                echo "Valor subindo ";
                echo "<font color='#006e00'>$var5 </font> % <br><br>";
                
            } elseif ($finance['currencies']['ARS']['variation'] == 0) {
                echo "Variação estável em ";
                echo "<font color='#FF3F00'>$var5 </font> % <br><br>";
            } else {
                echo "Valor caindo ";
                echo "<font color='#af0000'>$var5 </font> % <br><br>";
            }
            echo "<br> ";
            echo "<fieldset>
                    <div id='ars'><p>O Peso Argentino e a moeda oficial da Argentina </p></div>
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