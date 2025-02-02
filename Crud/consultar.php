<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Consultar dados cadastrados:</h1>
    
    <?php 
        //atribuir o nome pesquisa do HTML ao busca:
        $pesquisa = $_POST['pesquisar'] ?? '';
       
        include "conexao.php";

        $mysqlBusca = "SELECT * FROM pessoa WHERE nome LIKE '%$pesquisa%'";

        //Variavel vai receber: 
        $dados = mysqli_query($conex, $mysqlBusca);

       // for ($i = 0; $i < $dados; $i++) {}

       //Percorrer todos os dados e ir listando na tela. Achei que com o for daria certo, mas será feito com o While e com uma função especifica do PHP:
        while ($linha = mysqli_fetch_assoc($dados)) {
            foreach($linha as $key => $value){
                echo "$key:  $value: <br>";
            }
            echo "<form action='' method='POST' style='display:inline;'>
                        <input type='hidden' name='cod_pessoa' value='" . $linha['cod_pessoa'] . "'>
                        <input type='submit' name='delete' value='Deletar' onclick='return confirm(\"Tem certeza que deseja deletar?\");'>
                  </form><br><br>";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
            $cod_pessoa = $_POST['cod_pessoa']; //Nome salvo no banco de dados 
            $mysqlDeletar = "DELETE from pessoa WHERE `cod_pessoa` = $cod_pessoa";
            
            if(mysqli_query($conex, $mysqlDeletar)) {
                echo "Deletado com sucesso";
            }else{
                echo "erro ao deletar";
            }
        }


    ?>
  
    


    <a href="index.php">
        <button>Index</button>
    </a>

    <form action="atualizar.php" method="post">
        <label for="atualizar"></label>
        <input type="submit" name="atualizar" value="ATUALIZAR DADO">
    </form>

</body>
</html>