<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contato:</h1>
    </header>

    <?php 
        include('header.php');
    ?>

    <?php 
    include 'botaoVoltar.php'; 
    ?>

    <section class="contato">
        <h3>Formulário para contato:</h3>
        <form id="formularioDeContato" action="#" method="post">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome">

            <label for="email">Email: </label>
            <input type="email" id="email" name="email" >

            <label for="mensagem">Mensagem: </label>
            <textarea id="mensagem" name="mensagem" ></textarea>

            <button type = "submit">Enviar</button>
        </form>
    </section>
    
    <?php 
        include('footer.php')
    ?>
</body>
</html>