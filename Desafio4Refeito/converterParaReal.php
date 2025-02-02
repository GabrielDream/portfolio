<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $inicial = "";
        $final = "";

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'09-30-2024\'&@dataFinalCotacao=\'10-07-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        
        //var_dump($dados);

        $dolar = $dados["value"][0]["cotacaoCompra"];

        $num = $_GET["Conversao"];

        $convertido = $num / $dolar; 

        echo "O valor em Dolar de R$: ". number_format($num,2, ".", ",") ." é U$: ". number_format($convertido,2, ".", ",");  
    ?>
    <br>
    <button onclick="javascript:history.back(1)">Voltar</button>
</body>
</html>