<?php
include ('conexao.php');
$id = $_GET['id'];


$prepara = $conexao_pdo->prepare( "SELECT * from produtos  WHERE id =$id");
$prepara ->execute();
$usuario = $prepara ->fetch();
?>


<h1>Alterar Usuário</h1>
<form name="alt_cad_usuarios" action="altr_usuario.php" method="post">
    id: <input type="text" name="id" size="5" value="<?php echo $usuario['id'];?>"><br />
    Nome: <input type="text" name="nome" size="50" value="<?php echo $usuario['nome'];?>"><br />
    Email: <input type="text" name="email" size="50"value="<?php echo $usuario['email'];?>"><br />
    Senha: <input type="password" name="senha" size="10"value="<?php echo $usuario['senha'];?>"><br />
    <input type="submit" value="alterar" />
</form>