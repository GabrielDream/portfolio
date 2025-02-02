<?php 
    // Dados para conexão com o banco de dados
    $serverName = "localhost";
    $userName = "root"; 
    $password = ""; 
    $bancoDeDados = "teste_portfolio";

    // Estabelecendo a conexão
    $conecao = new mysqli($serverName, $userName, $password, $bancoDeDados);

    // Verificando se a conexão foi bem-sucedida
/*    if($conecao -> connect_error) {
        die("Falha na coneção" . $conecao -> connect_error);
    }else {
        echo ("Conexão bem-sucedida com o banco de dados!");
    }  */

    try {
        $conexao = new PDO("mysql:host=$serverName;dbname=$bancoDeDados", $userName, $password);  // Criando a conexão usando PDO
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configurando o modo de erro para exceções
        echo "Conexão bem-sucedida!"; // Mensagem de sucesso (opcional)

        // Verifica se o formulário foi enviado
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitização dos dados enviados pelo formulário
            $nome = htmlspecialchars(strip_tags($_POST['name'])); 
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $mensagem = htmlspecialchars(strip_tags($_POST['menssage']));

            // Validação básica
            if(!empty($nome) && !empty($email) && !empty($mensagem)) {
                // Prepara o SQL para inserir os dados na tabela
                $sql = "INSERT INTO dados (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
                $stmt = $conexao -> prepare ($sql);

                // Executa o SQL com os parâmetros
                $stmt -> execute([
                    ':nome' => $nome,
                    ':email' => $email,
                    ':mensagem' => $mensagem
                ]);

                // Exibe uma mensagem de sucesso
                echo "<p>dados enviados com sucesso!</p>";
            }else {
                echo "<p>Preencher todos os campos!</p>";
            }

        }

    } catch (PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage(); // Exibe mensagem de erro em caso de falha
    }
    
?>

