<?php
require('conectar.php');


    if(isset($_POST['enviar'])){
       
  
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$lanche = $_POST['lanche'];
$quantidade = $_POST['qtd'];
$endereco = $_POST['endereco'];
$obs = $_POST['obs'];
$pagamento = $_POST['pag'];


$sql = $conexao->prepare("INSERT INTO pedido (nome,telefone,lanche,quantidade,endereco,obs,pagamento) VALUES (:n,:t,:l,:q,:e,:o,:p)");
$sql->bindValue(':n',$nome);
$sql->bindValue(':t',$telefone);
$sql->bindValue(':l',$lanche);
$sql->bindValue(':q',$quantidade);
$sql->bindValue(':e',$endereco);
$sql->bindValue(':o',$obs);
$sql->bindValue(':p',$pagamento);
$sql->execute();
header("Location:../pedidos.html");
}
?>