<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numero = $_POST["numero"];

        $numero_inteiro = (int)$numero;
        $numero_float = (float)$numero - $numero_inteiro;


        echo "O número digitado é $numero . Seu inteiro é $numero_inteiro , e seu decimal é $numero_float";
    ?>
    <button onclick="javascript:history.back(1)">Voltar</button>
</body>
</html>