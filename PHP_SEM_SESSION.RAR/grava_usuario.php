<?php
include ('conexao.php');


function make_hash($str)
{


    return sha1(md5($str , PASSWORD_DEFAULT));
}

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confsenha = $_POST['confsenha'];

if($senha == $confsenha) {

    try {
        $senha = make_hash($senha);


        $pdo = $conexao_pdo->prepare("INSERT INTO usuarios(id,nome,email,senha)values('',:nome, :email, :senha)");
        $pdo->bindParam(":nome", $nome, PDO::PARAM_STR);
        $pdo->bindParam(":email", $email, PDO::PARAM_STR);
        $pdo->bindParam(":senha", $senha, PDO::PARAM_STR);
        $executa = $pdo->execute();
        if ($executa) {
            header('location: login.php');
            exit;
        } else {
            echo 'erro ao inserir os dados ';
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }
}else{
    echo "senhas diferentes";
}
