<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_GET);
            $n = $_GET["nome"] ?? "Desconhecidos";
            $n_s = $_GET["sobrenome"] ?? "Desconhecido";

            echo "<p>Prazer te conhecer $n $n_s, este e el site sangrentor<p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>