<?php
    $hostname = "localhost";
    $bancoDeDados = "clientes";
    $usuario = "root";
    $senha = "";

    $mySqll = new mysqli($hostname, $usuario, $senha, $bancoDeDados);

    if($mySqll->connect_errno) 
    {
        echo "Falha no servidor: (" . $mySqll -> connect_errno . ")" . $mySqll -> connect_errno;
    }
    else 
    {
        echo "Conectado ao Banco de Dados";
    }

?>