<link rel="stylesheet" href="indexStyle.css">
<?php //Codigo para puxar os dados do banco central
    //Para atualizar a data

    $inicio = date("m-d-Y", strtotime("-7 day")) ;
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);
    //var_dump($dados);

    $cotacao = $dados["value"][0]["cotacaoCompra"];

    $valor = $_GET["din"];
    
    $conversão = $valor / $cotacao;

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    //Bugado
    if(empty($valor)) 
    {
        echo ("Digite um valor maior que zero!");
        echo $valor;
    }
    else
    {   
        echo "Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conversão, "USD");
    }

?>  
<button onclick="javascript:history.go(-1)">Voltar</button>
