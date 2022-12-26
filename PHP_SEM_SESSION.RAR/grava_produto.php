<?php

include ('conexao.php');

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$usuario = $_POST['usuario'];
try {
    $pdo = $conexao_pdo->prepare("INSERT INTO produtos (id_produto,descricao,valor,usuario)value ('', :descricao, :valor, :usuario)");

    $pdo->bindParam(":descricão", $descricao, PDO::PARAM_STR);
    $pdo->bindParam(":valor", $valor, PDO::PARAM_INT);
    $pdo->bindParam(":usuario", $usuario, PDO::PARAM_STR);
    $executa = $pdo->execute();
    if ($executa) {
        echo ('dados cadastrados com sucesso');
    } else {
        echo('erro ao inserir os dados ');
    }
}
catch (PDOException $e){
    $e->getMessage();
}