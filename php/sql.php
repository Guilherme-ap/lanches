<?php
class usuario{

private $pdo;
public function conectar($nome,$host,$usuario,$senha){
    
    global $pdo;
    
    try{
        $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

    }catch (PDOException $e){
    
    }
    
}
public function cadastrar($nome,$email,$telefone,$cpf,$senha){
    global $pdo;
    
    $sql = $pdo->prepare("SELECT id FROM func where email = :e");
    $sql->bindValue(":e",$email);
    $sql->execute();
    
    if($sql->rowCount() > 0){
        return false; 
    }else{
        $sql= $pdo->prepare("INSERT INTO func (nome,email,telefone,cpf,senha) VALUES (:n,:e,:t,:c,:s)");
        $sql->bindValue(":n",$nome);
        $sql->bindValue(":e",$email);
        $sql->bindValue(":t",$telefone);
        $sql->bindValue(":c",$cpf);
        $sql->bindValue(":s",$senha);
        $sql->execute();
        return true;

    }


}
public function logar($email, $senha){

    global $pdo;

    $sql = $pdo->prepare("SELECT id FROM func where email = :e AND senha = :s");
    $sql->bindValue(":e",$email);
    $sql->bindValue(":s",$senha);
    $sql->execute();
    if($sql->rowCount()>0){
        
        $dado = $sql->fetch();
        session_start();
        $_SESSION['id'] = $dado['id'];
        return true;
    }else{
        return false;
    }


}


}
?>