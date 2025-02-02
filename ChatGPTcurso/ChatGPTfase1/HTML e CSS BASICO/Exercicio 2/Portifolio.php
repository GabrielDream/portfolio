<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Cabeçalho da página-->
    <header>
        <h1>Portifolio</h1>
    </header>

    <!--Tabela de projetos:-->
    <section>
        <h2>Table de projetos: </h2>
        <table>
            <thead>
                <tr>
                    <th>Projetos</th>
                    <th>Descrição</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Site do portifolio</td>
                    <td>Projeto HTML/CSS</td>
                    <td><a href="https://gabrieldream.github.io/">PROJETO</a></td>
                </tr>

                <tr>
                    <td>Projeto blog Simples</td>
                    <td>Projeto de implementação de FullStack</td>
                    <td><a href="#">ainda sem link</a></td>
                </tr>

                <tr>
                    <td>Login</td>
                    <td>Projeto de login com autenticação</td>
                    <td><a href="#">Ainda sem link</a></td>
                </tr>

                <tr>
                    <td>Ecommerce</td>
                    <td>E-commerce Básico com Carrinho de Compras</td>
                    <td><a href="#">Sem link por ora</a></td>
                </tr>
            </tbody>
        </table>
    </section>

    <!--Formulário-->
    <section>
        <h2>Entre em contato</h2>
        <form action="" method="post">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email: </label>
            <input for="email" id="email" name="email" required>

            <label for="mensagem">Digita tua mensagem: </label>
            <textarea name="mensagem" rows=4 required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>
</body>
</html>

<!--Coloquei o símbolo # nos links vazios porque:

Evitar Links Quebrados: O # funciona como um "placeholder" temporário, indicando que o link ainda não está pronto, mas evitando que o navegador redirecione para lugar nenhum ou mostre erro.

Usabilidade: Se o usuário clicar em um link vazio sem #, pode não acontecer nada visível, enquanto com #, ele verá o comportamento padrão de rolar até o topo da página, indicando que é um link funcional (mesmo sem um destino real).

Prática Comum: Em projetos em andamento, é comum usar # enquanto o link definitivo ainda não foi definido. Isso é melhor do que deixar o atributo href vazio ou omitir o href completamente, pois mantém o HTML semântico.-->