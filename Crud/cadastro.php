<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Declaração para puxar os dados do script de conexão com o banco de dados:
        include "conexao.php";

    //Declaração das variáveis para se conectar ao formulário HTML. 
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $nascimento = $_POST["nascimento"];

    //FAZER O CADASTRO:
        //primeiro, tem que conectar o comando "INSERTO INTO" no "phpmyadmin" a uma variavel. Esta variavel estará dentro de uma condição que IMPEDIRÁ de ser cadastrado caso algum parâmetro esteja vazio. 
        if (empty($nome) || empty($endereco) || empty($telefone) || empty($email) || empty($nascimento)) {
            echo "Todos os campos devem ser preenchidos!";
        }else {
            $mysqlCadastro = "INSERT INTO `pessoa`(`nome`, `endereco`, `telefone`, `email`, `nascimento`) VALUES 
            ('$nome','$endereco','$telefone','$email', '$nascimento')"; 
            //O parametro "cod_pessoas" é gerado automaricamente, portando, pode sair de lá, é desnecessário. Por motivos didáticos, deixarei lá. 
            //A linha "('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";" Será SUBSTITUIDA PELAS VARIAVEIS que conectam ao formulário HTML.  
            
            //Comando que passará os dados para dentro do banco de dados:
            if(mysqli_query($conex,$mysqlCadastro)) {
                echo "$nome cadastrado com sucesso";
            }else {
                echo "ERRO AO CASDASTRAR!";
            } //O segundo parametro é a variavel de comando, que dirá o que será feito no banco de dados, neste caso, INSERIR DADOS (CADASTRAS)
        }
      
    ?>

</body>
</html>