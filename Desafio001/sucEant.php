<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php">
        <h1>Informar número a ser calculado</h1>
        <label for="num">Numero:</label>
        <input type="number" name="num" id="num">

        <input type="submit" value="Resultado">
    </form>

    <?php 
        $numero = 0; 

    ?>
</body>
</html>