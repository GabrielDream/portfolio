<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Botão de cumprimento</h1>
    
    <fieldset>
        <legend>Area do botão</legend>
        <form action="cumprimento.php" method="post">
            <button type="submit">Enviar</button>
        </form>
    </fieldset>
    
    <br><br>
    <fieldset>
        <legend>CALCULADORA</legend>
        <form action="cumprimento.php" method="POST">

            <label for="numero1"></label>
            <input type="number" name="numero1" require>

            <label for="sinal">Operador:</label>
            <select name="sinal" id="sinal" required>
                <option value="" disabled selected>Escolha um operador</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <label for="numero2"></label>
            <input type="number" name="numero2" require>

            <input type="submit" value="Enviar">
        </form>
    </fieldset>
</body>
</html>