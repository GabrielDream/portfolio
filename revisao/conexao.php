<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "empresa2";
//Cria as variaveis que vão receber os atributos do banco de dados. 

    //mysqli_connect($server, $user, $password, $database); //função de conexão

    //Fazer a condição:
    if($conex=mysqli_connect($server, $user, $password, $database)) {
        echo "Funciona  ";
    }
    else{
        echo "Não funciona";
    }
?>