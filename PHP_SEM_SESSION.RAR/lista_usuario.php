<?php
include ('conexao.php');
$prepara = $conexao_pdo->prepare('SELECT * from usuarios');
$prepara->execute();
$total = $prepara->rowCount();
// Laço para exibir todas as linhas
echo "<br />Total de Cadastros: " . $total."<br />";
echo "<table border='1'>";
echo "<tr><th>nome</th><th>email</th><th>alterar</th><th>exlcuir</th></tr>";
while ( $linha = $prepara->fetch() ) {
    echo "<tr><td>$linha[nome]</td>";
    echo "<td>$linha[email]</td>";
    echo "<td><a href='alt_produto.php?id=$linha[id]'/>alterar</td>";
    echo "<td><a href='del_usuario.php?id=$linha[id]'/>excluir</td></tr>";
}

?>
<a href="index.php"><button>Volte ao inicio</button></a>
