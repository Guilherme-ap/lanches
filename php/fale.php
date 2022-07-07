<?php
require('conectar.php');


    if(isset($_POST['enviar'])){
       
  
$nome = $_POST['nome'];
$telefone = $_POST['fone'];
$email = $_POST['email'];


$sql = $conexao->prepare("INSERT INTO faleconosco (nome,telefone,email) VALUES (:n,:t,:e)");
$sql->bindValue(':n',$nome);
$sql->bindValue(':t',$telefone);
$sql->bindValue(':e',$email);

$sql->execute();
header("Location:../index.html");
}
?>