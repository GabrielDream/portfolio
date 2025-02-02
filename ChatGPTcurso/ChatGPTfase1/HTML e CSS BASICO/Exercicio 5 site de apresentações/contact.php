<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="contato">
        <h2>Contato:</h2>
        <form id="formularioParaContato" action="processar_formulario.php" method="post">
            <label for="name">Name: </label>
            <input type="text" id="name" name="name">

            <label for="email">Email: </label>
            <input type="email" id="email" name="email">

            <label for="message">Message: </label>
            <textarea id="message" name="menssage" rows="5"></textarea>
        
            <button type="submit">Enviar</button>
        </form>
    </section>
    
    <?php 
        include ('footer.php');
    ?>
</body>
</html>