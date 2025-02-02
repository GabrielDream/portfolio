<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio EXTRA 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Cabeçalho-->
    <header>
        <h1>TABELA</h1> 
    </header>

    <!--Section para boas práticas:-->
    <main>
    <section class="container">
            <h2>Tabela ficticia</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Cidade</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Entada da tabela será coloicada aqui-->
                </tbody>
            </table>
        </section>
      
        <!--Formulario:-->
        <section id="Formulario-container">
            <form id="Formulario" action="javascript:void(0);">
                <label for="nome">Nome</label>
                <input type="text" id="nome" required>

                <label for="idade">Idade</label>
                <input type="number" id="idade" required>

                <label for="cidade">Cidade</label>
                <input for="text" id="cidade" required>
            
                <button type="submit">Adicionar</button>
            </form>
        </section>
    </main>
    <script src="scripts.js"></script>
</body>
</html>