<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Página de cadastro<h1>
    
    <?php
        //Criar a varavel que vai receber a conexão
        include "conexao.php"; //Chamar o outro script para acessar suas váriaveis

         //Pegar o nome dos métodos do formulário:
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['emaill'];
        $data_nascimento = $_POST['nascimento'];

        //Aplicar o comando insert para inserir os dados no banco de dados:
        $sql = "INSERT INTO `pessoas2`(`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES 
        ('$nome','$endereco','$telefone','$email','$data_nascimento')";

        //Utilizar a função mysqli_query para armazenar:
        //mysqli_query($conex, $sql);

        //Fazer a condição: 
        if(mysqli_query($conex, $sql)) {
            echo "cadastro realizado - registrado no banco de dados";
        }
        else {
            echo "Erro ao cadastrar";
        }
    ?>

    <a href="index.php">
        <button>Voltar</button>
    </a>
</body>
</html>