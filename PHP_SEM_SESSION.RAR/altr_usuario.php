<?php
//conexão com a base de dados
include ('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$id    = $_POST['id'];
try{
    $pdo = $conexao_pdo->prepare("UPDATE usuarios SET nome=:nome ,email=:email, senha=:senha  WHERE id=:$id");
    $pdo->bindParam(":id",$id, PDO::PARAM_INT);
    $pdo->bindParam(":descricao", $nome , PDO::PARAM_STR);
    $pdo->bindParam(":email", $email , PDO::PARAM_STR);
    $pdo->bindParam(":senha", $senha , PDO::PARAM_STR);
    $executa = $pdo->execute();
    if($executa){
        echo 'Dados inseridos com sucesso';

    } else{
        echo 'Erro ao inserir os dados';
    }
}
catch(PDOException $e) {
    echo $e->getMessage();
}