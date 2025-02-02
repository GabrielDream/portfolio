<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda simples</title>
</head>
<body>
    <h1>Converter Real para Dolar:</h1>
    <?php 
        $real = $_GET["din"] ?? 0;
        $dolar = $real / 5.50;
        
        if(empty($real))
        {
            echo "caixa vazia";
        }
        else
        {
           //echo "Seus R\$" . number_format($real, 2) . " equivalem a US\$" . number_format($dolar, 2);
           //Formatação com internacionalização (mais profissional
           $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
           echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        }
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    
</body>
</html>