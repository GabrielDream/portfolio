<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 class="apSobrePagina">Layout exercicio 4</h1>
    </header>

    <?php 
        include('header.php');
    ?>

    <section class="aplicacoesJava">
        <h3>Sessões de ideias em JS:</h3>
        <ul>
            <li>Alerta ao clicar em um link da barra de navegação.</li>
            <li>Alterar o fundo da seção "Sobre" ao passar o mouse.</li>
            <li>Validar o formulário da seção "Contato" antes de enviar.</li>
        </ul>
    </section>

    <?php 
        include('footer.php')
    ?>
</body>
</html>