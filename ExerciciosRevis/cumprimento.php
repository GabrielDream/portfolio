<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "Exercicio 1" . "<br>";
        echo "Hello World!" . "<br>" . "<br>";
        
        echo "Exercicio 2:" . "<br>" . "<br>";
        $tipoInt = 1; 
        $tipoFloat = 1.1; 
        $tipoString = "String";
        $tipoBool = true; 
        //cho "{$tipoInt} , {$tipoFloat} , {$tipoString} , {$tipoBool}"; 
        var_dump($tipoInt);
        var_dump($tipoFloat);
        var_dump($tipoString);
        var_dump($tipoBool);

        echo "<br>" . "<br>" . "<br>" . "<br>" . "<br>";
       
        echo "Exercio 3, CALCULADORA";
        echo "<br>";
        $numero1 = $_POST['numero1'];
        $sinal = $_POST['sinal'];
        $numero2 = $_POST['numero2'];    
        if($sinal == "+") {
            $result = $numero1 + $numero2; 
            echo "O resultado é: {$result}";
        }
        elseif ($sinal == "-") 
        {
            $result = $numero1 - $numero2; 
            echo "O resultado é: {$result}";
        }
        elseif ($sinal == "*") 
        {
            $result = $numero1 * $numero2; 
            echo "O resultado é: {$result}";
        }
        elseif ($sinal == "/") 
        {
            $result = $numero1 / $numero2; 
            echo "O resultado é: {$result}";
        }else {
            echo "<br>";
            echo "Operação inválida";
        }

        echo "<br>" . "<br>" . "<br>" . "<br>" . "<br>";

    ?>

    <br>
    <button onclick="voltarPagina()">Voltar</button>
    
    <script>
        function voltarPagina () {
            window.history.back();
        }
    </script>
</body>
</html>