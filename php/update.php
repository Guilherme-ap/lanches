
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

<?php
require_once "conectar.php";

    $id = $_GET['id'];

    echo "<h1>ALTERANDO REGISTRO</h1>";
    $consulta = $conexao->prepare('SELECT *FROM func WHERE id = :id');
    $consulta->bindParam(':id',$id);
    $consulta->execute();

    $linha = $consulta->fetch(PDO::FETCH_ASSOC);
    echo "Usuário: {$linha['id']}";

    echo "<form method='post' action=''><label>";
    echo "<input type='hidden' name='txtid' value='{$linha['id']}'><br>";
    echo "<p>Nome: <input type='text' name='txtnome' value='{$linha['nome']}'></p>";
    echo "</label><label><p>Email: <input type='email' name='txtemail' value='{$linha['email']}'></p>";
    echo "</label><label><p>telefone: <input type='text' name='txttelefone' value='{$linha['telefone']}'></p>";
    echo "</label><label><p>cpf: <input type='text' name='txttelefone' value='{$linha['cpf']}'></p>";
    echo "</label><label><p>senha: <input type='password' name='txttelefone' value='{$linha['senha']}'></p>";
    echo "</label<p><input type='submit' value='Alterar' name='enviar'></p></form>";

   if(isset($_POST['enviar'])){
    $id = $_POST['txtid'];
    $nome = $_POST["txtnome"];
    $email = $_POST["txtemail"];
    $telefone = $_POST["txtemail"];
    $cpf = $_POST["txtcpf"];
    $senha = $_POST["txtsenha"];
    try{
        $altera = $conexao->prepare('UPDATE func SET nome = :nome, email = :email, telefone = :telefone, cpf = :cpf, senha = :senha WHERE id = :id');
        $altera->execute(array(
            ':id'      => $id,
            ':nome'    => $nome,
            ':email'   => $email,
            ':telefone'   => $telefone,
            ':cpf'      =>$cpf,
            ':senha'      =>$senha,
        ));

    }  catch(PDOException $e) {
        echo 'Error:  '  . $e->getMessage();
    }
  header("location:create.php");
}?>

</main>
</body>
</html>

