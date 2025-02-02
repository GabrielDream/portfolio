<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Exemplo de PHP</title>
</head>
<body>
    <h1>Exemplo de PHP
        <?php 
            date_default_timezone_set("America/Sao_Paulo"); //Colocar a data baseada na localização do cliente
            echo "Hoje é dia " . date("d/M/Y"); 
            echo ""; //Achei que fosse assim para fazer a quebra de linha
            echo " e a hora atual é " . date("G:i:s T");

            $nome = "Jibrail";
            $sobrenome = "Bussab";
            const pais = "Brasil"; //Constantes NÃO TEM CIFRÃO NA FRENTE
    
            echo "Muito prazer $nome $sobrenome! Tu mora no " . pais;

            //Váriaveis sempre começam com $cifrão
            //O segundo pode ser LETRA ou SIMBOLO 
            //Aceita caracteres (com acento também)
            //A linguagem é CASE SENTIVE em relação a nomes: maiusculos e minisculos FAZEM DIFERENÇA 

            $testeDeAspas = 'Aspas';
            
            echo "$testeDeAspas"; //Aspas duplas diz que ele retornará o que está dentro da variavel. 

            echo '$testeDeAspas'; //NÃO LERÁ A VARIAVEL

            const Canal = "Curso em Vídeo";
            echo "Eu adoro o " . Canal;
            
            //Exemplo do Rodrigo "Minotauro" Nogueira 

            $lutador = "Rodrigo";
            $sobreNomeLutador = "Nogueira";

            echo "Nome do lutador é $lutador \"Minotauro\" $sobreNomeLutador"; 
        ?>
    </h1>
</body>
</html>