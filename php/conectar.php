<?php

    $host="localhost";
    $dados="final";
    $user="root";
    $password="";

    try{
        $conexao = new PDO('mysql:host='.$host.';dbname='.$dados,$user,$password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOExeption $e){
        echo 'Erro ao conectar com o MySQL'.$e->getMessage();
    }

?>