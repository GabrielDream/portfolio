<?php 
    $user = "root";
    $password = "";
    $server = "localhost";
    $database = "empresa";

    if($conex = mysqli_connect($server, $user, $password, $database)) {
        echo "Bando de Dados funcionou: ";
    }else {
        echo "Erro ao conectar ao banco";
    }  
?>
<a href="index.php">
    <button>Voltar</button>
</a>