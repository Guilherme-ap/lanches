<?php
require_once 'php/sql.php';
$u = new usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/Lanche.png" />
    <link rel="stylesheet" type="text/css" href="Estilo/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>lanches</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="Index.html">Home</a></li>
            <li><a href="Index.html">Endereços</a></li>
            <li><a href="Pedidos.html">Pedidos</a></li>
            <li><a href="Index.html">Fale Conosco</a></li>
            <li><a href="login.php" id="log">Login</a></li>
        </ul>
        <h1>Lanches</h1>

    </header>
    <main>
        
        <img src="imagens/log.jpg" class="cardapio">
    <h2>Login</h2>
    <form method="post" action="">
        <label for="lanc">Email</label>
        <input type="text" id="lanc" name="email" maxlength="40" required > 
        <label for="qtd">Senha</label>
        <input type="password" id="qtd" name="senha"required>
        <input type="submit" class="botao" value="enviar" name="enviar"><br>
        <input type="reset" class="botao" value="Limpar">
    </form>
    <?php
        if(isset($_POST['email'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $u->conectar("final","localhost","root","");
        if($u->logar($email,$senha)){
            session_start();
            $_SESSION['email'] =  $email ;
            header("location:php/admin.php");

        }else{
            echo "email ou senha incorretos";
        }

        }
    
        ?>
</main>
</body>
</html>