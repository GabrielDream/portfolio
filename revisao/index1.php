<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de conexao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CRUD SIMPLES</h1>
    <form action="cadastro.php" method="post">
        
        <div class="label_control">       
            <label for="nome">Nome Completo: </label>
            <input type="text" name="nome" require>
        </div> 
        
        <div class="label_control">    
            <label for="endereco">Endereço: </label>
            <input type="text" name="endereco" require>
        </div>  

        <div class="label_control">   
            <label for="telefone">Telefone: </label>
            <input type="number" name="telefone" require>
        </div>
        
        <div class="label_control">
            <label for="emaill">Email: </label>
            <input type="email" name="emaill" require>
        </div>
        
        <div class="label_control">
            <label for="nascimento">Data de Nascimento: </label>
            <input type="date" name="nascimento" require>
        </div>

        <input type="submit" value="Enviar">
    </form>

    <a href="index2.php">
        <button>Ir para Index2</button>
    </a>

    <a href="conexao.php">
        <button>Testar conexão</button>
    </a>
</body>
</html>