<?php

include ('conexao.php');

$id = $_GET['id'];

try {
    $prepara = $conexao_pdo->prepare( "DELETE FROM usuarios WHERE id=$id");
    $executa=$prepara->execute();
    if ($executa){
        echo('exclusão realizada com sucesso');
        exit;
    }else {
        echo 'erro ao excluir usuario';
    }
}
catch (PDOException $e){
    echo $e->getMessage();
}
