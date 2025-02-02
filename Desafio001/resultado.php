<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
        $numero = $_REQUEST["num"];
        $n_anterio = $numero - 1; 
        $n_sucessor = $numero + 1;
        
        echo "O valor é $numero";
        echo "  $n_anterio";
        echo "  $n_sucessor";
    ?>
</body>
</html>