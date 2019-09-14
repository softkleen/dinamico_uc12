<?php
// conexão banco de dados mysql (Simples)
    $host = "localhost";
    $usuario = "root";
    $senha = "usbw";
    $banco = "dinamicodb";

    $db = mysqli_connect($host, $usuario,$senha, $banco);
    //var_dump($db);

?>