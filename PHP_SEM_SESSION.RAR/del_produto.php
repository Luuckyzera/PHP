<?php
include ('conexao.php');
$id = $_GET['id'];

try{
    $prepara = $conexao_pdo->prepare("delete from produtos where id_produto= $id");
    $executa = $prepara->execute();
        if ($executa) {
            echo 'Dados excuidos com sucesso';
                exit;
                } else {
            echo 'erro ao excluir os os dados ';
            }
    }
    catch (PDOException $e){
        $e->getMessage();
}