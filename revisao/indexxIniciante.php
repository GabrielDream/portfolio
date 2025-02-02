<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index iniciante</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <form class="formulario" action="formularioindexxIniciante.php" method="post">
        <div class="campo">
            <label for = "numbero1"></label>
            <input type = "number" name="numero1" placeholder="Numero1" require>
        </div>

        <div class="campo">
            <label for="sinal"></label>
            <select name="sinal" required>
                <option value="" disabled selected>Escolha uma operação</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select> AMANHÃ DEVO CONECTAR ISSO COM O METODO POST E DAR CONTINUIDADE NOS EXERCICIOS!!
        </div>

        <div class="campo">
            <label for = "numero2"></label>
            <input type = "number" placeholder="Numero2" name="numero2" require>
        </div>

        <div class="campo">

        
            <input type = "submit" value="Calcular">
        </div>
    </form>
    <br>

    <?php 
        //Exercicio 1
        echo "hello world!";
        echo "<br>";
        
        //Exercicio 2 
        $inteiro = 1; 
        $flutuante = 1.5; 
        $verificar = true;

        var_dump($inteiro, $flutuante, $verificar);
        echo "<br>";

        //Exercicio 3: 
        
    ?>
</body>
</html>