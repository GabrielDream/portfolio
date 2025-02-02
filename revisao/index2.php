<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de conexao</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>CRUD SIMPLES</h1>
    <form action="conectado.php" method="post">
        
        <div class="label_control">       
            <label for="nome">Nome Completo: </label>
            <input type="text" name="nome">
        </div> 
        
        <div class="label_control">    
            <label for="endereço">Endereço: </label>
            <input type="text" name="endereço">
        </div>  

        <div class="label_control">   
            <label for="telefone">Telefone: </label>
            <input type="number" name="telefone">
        </div>
        
        <div class="label_control">
            <label for="emaill">Email: </label>
            <input type="email" name="emaill">
        </div>
        
        <div class="label_control">
            <label for="nascimento">Data de Nascimento: </label>
            <input type="date" name="nascimento">
        </div>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>