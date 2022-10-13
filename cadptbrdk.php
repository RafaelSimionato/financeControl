<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledark.css">
    <title>Dollar Canadense </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // Primeiro parametro do construtor recebe a chave da API
            $HGFinance = new HGFinance('71486043');//MINHA-CHAVE
            $finance = $HGFinance ->get();
            
            $var6 = $finance['currencies']['CAD']['variation'];                      
            
            echo "<h1>Sobre o Dólar Canadense </h1>";            
            echo "<h3> CAD (Canadian Dollar) <br>x<br> BRL (Real Brasileiro) </h3> ";
            echo "<br>";
            echo " C$ 01 Dólar Canadense (CAD) equivale a R$ ";
            echo number_format($finance ['currencies']['CAD']['buy'], 2);
            echo "<br>";
            echo " neste momento ";
            echo "<br><br> ";

            if ($finance['currencies']['CAD']['variation'] > 0) {
                echo "Valor subindo ";
                echo "<font color='#5eff00'>$var6 </font> % <br><br>";
                
            } elseif ($finance['currencies']['CAD']['variation'] == 0) {
                echo "Variação estável em ";
                echo "<font color='#303b3b'>$var6 </font> % <br><br>";
            } else {
                echo "Valor caindo ";
                echo "<font color='#ff0800'>$var6 </font> % <br><br>";
            }
            echo "<br> ";
            echo "<fieldset>
                    <div id='cad'>
                        <p>O Dólar Canadense é a moeda oficial do Canadá </p>
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