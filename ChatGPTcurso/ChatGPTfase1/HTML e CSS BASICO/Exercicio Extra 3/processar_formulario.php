<?php 
    // Verifica se o formulário foi enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para sanitizar os dados
        $nome = htmlspecialchars(trim($_POST["nome"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $assunto = htmlspecialchars(trim($_POST["assunto"]));
        $mensagem = htmlspecialchars(trim($_POST["mensagem"]));
        
        $erros = []; // Array para armazenar erros de validação

        // Validação de campos obrigatórios
        if (empty($nome)) {
            $erros[] = "O campo nome é obrigatório.";
        }

        if (empty($email)) {
            $erros[] = "O campo email é obrigatório.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = "O email inserido não é válido.";
        }

        if (empty($assunto)) {
            $erros[] = "O campo assunto é obrigatório.";
        }

        if (empty($mensagem)) {
            $erros[] = "O campo mensagem é obrigatório.";
        }

        // Verifica se há erros
        if (empty($erros)) {
            // Exibe mensagem de sucesso
            echo "<h2>Formulário enviado com sucesso!</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Assunto:</strong> $assunto</p>";
            echo "<p><strong>Mensagem:</strong> $mensagem</p>";
        } else {
            // Exibe os erros
            echo "<h2>Erros no formulário</h2>"; 
            foreach ($erros as $erro) {
                echo "<p>$erro</p>";
            }
            // Volta para a página anterior
            echo '<a href="contato.php">Voltar ao formulário</a>';
        }
    }
?>
