<?php 
require_once "conectar.php";
$consulta = $conexao->prepare('SELECT * FROM faleconosco');
$consulta->execute();

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

      <h1>LISTAGEM DE FEEDBACK</h1>
      <table width="80%" border="1">
        <tr>
        
          <th>Nome</th>
          <th>EMail</th>
          <th>Telefone</th>
        
        </tr>
        </main>
  </body>
  </html>
  <?php
while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
   
    echo "<td>{$linha['nome']}</td>";
    echo "<td>{$linha['email']}</td>";
    echo "<td>{$linha['telefone']}</td>";
    echo "</tr>";
  
}