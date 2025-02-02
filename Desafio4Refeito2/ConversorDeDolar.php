<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Criar a conexão com o site do banco central:
        $inicio = date("m-d-Y", strtotime("- 7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; //link que o banco central gerou
        $dados = json_decode(file_get_contents($url) , true); 
        $cotacao = $dados ["value"][0]["cotacaoCompra"];

        //echo "A cotação atual é $cotacao";
        //var_dump($dados);

        $real = $_GET["numero"];

        $dolar = $real / $cotacao;

        echo "O valor digitado em R$: ".number_format($real, 2, "." , ",")." e sua conversão em Dolar vale U$: ".number_format($dolar,2, ".", ",")."";
    ?>
    <br>
    <button onclick="javascript:history.back(1)">Voltar</button>
</body>
</html>