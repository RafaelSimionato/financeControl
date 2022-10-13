<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Euro </title>
</head>
<body>
    <div>
        <?php
            include 'hg_finance.php';
            // Primeiro parametro do construtor recebe a chave da API
            $HGFinance = new HGFinance('71486043');//MINHA-CHAVE
            $finance = $HGFinance ->get();
            
            $var3 = $finance['currencies']['EUR']['variation'];
            
            echo "<h1> Sobre o Euro </h1>";            
            echo "<h3> EUR (Euro) <br>x<br> BRL (Real brasileiro) </h3> ";
            echo "<br>";
            echo "&euro; 01 Euro equivale a R$ ";
            echo number_format($finance ['currencies']['EUR']['buy'], 2);
            echo " neste momento ";
            echo "<br><br> ";

            if ($finance['currencies']['EUR']['variation'] > 0) {
                echo "Valor subindo ";
                echo "<font color='#006e00'>$var3 </font> % ";
                
            } elseif ($finance['currencies']['EUR']['variation'] == 0) {
                echo "Variação estável em ";
                echo "<font color='#303b3b'>$var3 </font> % <br>";
                echo "Nenhuma movimentação significativa <br> ";
            } else {
                echo "Valor caindo ";
                echo "<font color='#af0000'>$var3 </font> % ";
            }
            echo "<br><br> ";
            echo "<fieldset><div id='eur'><p>O Euro e a moeda oficial utilizada em 19 dos 27 paises pertencentes a União Europeia </p> <p><strong>Áustria, Bélgica, Chipre, Estónia, Finlândia, França, Alemanha, Grécia, Irlanda, Itália, Letónia, Lituânia, Luxemburgo, Malta, Países Baixos, Portugal, Eslováquia, Eslovénia e Espanha</strong> </p> <p>Estes paises formam a conhecida 'Zona Euro' e ou 'Área do Euro' </p>
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