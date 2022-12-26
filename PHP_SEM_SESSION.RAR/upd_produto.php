<?php
//conexão com a base de dados
include ('conexao.php');

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$usuario = $_POST['usuarios'];
$id = $_POST['id'];

try{
    $pdo = $conexao_pdo->prepare("UPDATE produtos SET descricao=:descricao ,valor=:valor, usuario=:usuario 
                                    WHERE id_produto=:");
    $pdo->bindParam(":descricao", $descricao , PDO::PARAM_STR);
    $pdo->bindParam(":valor", $valor , PDO::PARAM_STR);
    $pdo->bindParam(":usuario", $usuario , PDO::PARAM_INT);
    $pdo->bindParam(":id", $id , PDO::PARAM_INT);
    $executa = $pdo->execute();
    if($executa){
        echo 'Dados inseridos com sucesso';
        //echo "<script>alert('Cadastro realizado com sucesso!')</script>";
        //header('Location: index.php');
        //exit;
    } else{
        echo 'Erro ao inserir os dados';
    }
}
catch(PDOException $e){
    echo $e->getMessage();
}

