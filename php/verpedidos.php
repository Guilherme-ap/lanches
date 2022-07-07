<?php 
require_once "conectar.php";
$consulta = $conexao->prepare('SELECT * FROM pedido');
$consulta->execute();

?>
<!DOCTYPE html>
  <html lang="en">
  <head>
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
      <h1>LISTAGEM DE PEDIDOS</h1>
      <table width="80%" border="1">
        <tr>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Lanche</th>
          <th>Quantidade</th>
          <th>Endereco</th>
          <th>OBS</th>
          <th>Pagamento</th>
       
        </tr>
</main>
  </body>
  </html>
  <?php
while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
    echo"<tr><td>{$linha['nome']}</td>";
    echo "<td>{$linha['telefone']}</td>";
    echo "<td>{$linha['lanche']}</td>";
    echo "<td>{$linha['quantidade']}</td>";
    echo "<td>{$linha['endereco']}</td>";
    echo "<td>{$linha['obs']}</td>";
    echo "<td>{$linha['pagamento']}</td>";
    echo "</tr>";

}