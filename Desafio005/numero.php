<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Analisando o numero:</h1>
    <?php 
        $num = $_POST["numberr"] ?? 0;

        echo "<p>O número analisado foi <strong>". number_format($num, 3, "," , ".") . "</strong> </p>";

        $num_int = (int)$num;
        $num_float = $num - $num_int;
        
        echo "<p>O número inteiro é ". number_format($num_int,0, "," , ".") ." e sua parte decimal é ". number_format($num_float, 3, "," , ".") ." </p>";
    ?>
    <button onclick="javascript:history.back(1)">Voltar</button>
</body>
</html>