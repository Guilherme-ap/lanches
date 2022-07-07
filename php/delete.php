<?php
    require "conectar.php";

    $id = filter_input(INPUT_GET, 'id');

    if($id) {
        $sql = $conexao->prepare("DELETE FROM func WHERE id = :id");
        $sql -> bindValue(':id', $id);
        $sql -> execute();
        echo "Excluído com sucesso";
        
    }else{
    echo "Não foi possível excluir";
    }
    echo "<h3><a href='read.php'>VOLTAR</a><h3>";

?>