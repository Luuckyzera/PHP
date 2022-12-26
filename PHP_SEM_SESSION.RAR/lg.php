<?php
include ('conexao.php');


$email = $_POST['email'];
$senha = $_POST['senha_login'];


    try {

        $prepara = $conexao_pdo->prepare("SELECT * FROM usuarios where email = '$email' AND senha = '$senha'");
        $prepara->bindParam(":email", $email, PDO::PARAM_STR);
        $prepara->bindParam(":senha", $senha, PDO::PARAM_STR);
        $executa = $prepara->execute();

        $total = $prepara->rowCount();
        echo $total;


            if ($total == 1) {
                echo "<script>alert('login realizado com sucesso')</script>";
                header('location: index.php');
            } else {
                echo "<script>alert('login falhou ')</script>";
                echo "<br /><a href='login.php'>voltar</a>";
            }

        }

    catch
        (PDOException $e){
            echo $e->getMessage();

}
?>
