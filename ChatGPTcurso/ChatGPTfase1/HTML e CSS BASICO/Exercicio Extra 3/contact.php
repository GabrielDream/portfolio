<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Extra 3 contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>CONTATO</h1>
    </header>
    
    <?php 
        include('header.php'); 
    ?>

    <section class="contato">
        <form id="formularioParaContato" action="processar_formulario.php" method="post">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome">

            <label for="email">Email: </label>
            <input type="email" id="email" name="email">

            <label for="assunto">Assunto: </label>
            <input type="text" id="assunto" name="assunto">

            <label for="mensagem">Mensagem: </lable>
            <textarea id="mensagem" name="mensagem" required> </textarea>


            <button type="submit">Enviar</button>
        </form>
    </section>

    <?php 
        include ('voltarIndex.php');
    ?>

    
    <?php 
        include ('footer.php');
    ?>
</body>
</html>