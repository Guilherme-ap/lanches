<?php
 include_once 'sql.php';
$novo = new usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Estilo/style2.css" />
    <link rel="icon" href="../Imagens/Lanche.png" />
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>lanches</title>
<body>
<header>
        <ul>
            <li><a href="verpedidos.php">ver pedidos</a></li>
            <li><a href="read.php">ver funcionarios</a></li>
            <li><a href="verfale.php">ver fale conosco</a></li>
            <li><a href="create.php">criar conta</a></li>
            <li><a href="../index.html" id="log">sair</a></li>
        </ul>
</header>
<main>
    <h1>CADASTRAR USUÁRIOS</h1>
    <form action="" method="post">
       <label>
          <p>Nome: <input type="text" name="txtnome"></p>
       </label>
       <label>
          <p>Email: <input type="email" name="txtemail"></p>
       </label>
       <label>
          <p>telefone:<input type="text" name="txttelefone"></p>
       </label>
       <label>
          <p>CPF:<input type="text" name="txtcpf"></p>
       </label>
       <label>
          <p>senha:<input type="password" name="txtsenha"></p>
       </label>
       <p><input type="submit" value="Cadastrar" name="enviar"></p>
    </form>  

    <?php
    
if(isset($_POST['enviar'])){
   global $u;
   $nome = filter_input(INPUT_POST,'txtnome');
   $email = filter_input(INPUT_POST,'txtemail');
   $telefone = filter_input(INPUT_POST,'txttelefone');  
   $cpf = filter_input(INPUT_POST,'txtcpf');
   $senha = md5(filter_input(INPUT_POST,'txtsenha'));


   setcookie('nome',$nome, time()+262974383);


   $novo->conectar("final","localhost","root","");

       if($novo->cadastrar($nome,$email,$telefone,$cpf,$senha)){
           echo "Cadastrado com sucesso!";
       }else{
           echo "Este email ja esta cadastrado!";
       }
   
   
}

?>
</main>
</body>
</html>