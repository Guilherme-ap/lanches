<?php

require_once("conectar.php");
 


$email =filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$senha = md5($_POST['senha']);
 
$sql = "SELECT id FROM func WHERE email = :email AND senha = :senha";
$result = $conexao->prepare($sql); 
$result->execute(['email' => $email, 'senha' => $senha]);
$final = $result->fetch();

if(!empty($final)){
    session_start();
    
   
    echo "n achou";
    header("Location: admin.php");
}else{
   
}