<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="cadastro.php" method="post">
           
        <div class="form_control">
                <label for="nome">Nome Completo: </label>
                <input type="text" class="form_control" name="nome">
        </div>
            
        <div class="form_control">
            <label for="endereco">Endereço: </label>
            <input type="text" name="endereco">
        </div>

        <div class="form_control">
            <label for="telefone">Telefone: </label>
            <input type="text" name="telefone">
        </div>

        <div class="form_control">
            <label for="email">Email: </label>
            <input type="email" name="email">
        </div>

        <div class="form_control">
            <label for="nascimento">Data de Nascimento: </label>
            <input type="date" name="nascimento">
        </div>

        <input type="submit" value="Enviar">
           
        </form>

        <a href="conexao.php">
        <button>TESTAR BANCO</button>
        </a>

        <form action="consultar.php" method="POST">
            <label for="pesquisar">Pesquisar: </label>
            <input type="search" placeholder="search" name="pesquisar">
            <button type="submit">Search</button>
        </form>

    </div>

</body>
</html>