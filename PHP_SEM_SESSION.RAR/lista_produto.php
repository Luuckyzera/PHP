
<?php
include ('conexao.php');
$prepara = $conexao_pdo->prepare("SELECT * from produtos");
$prepara->execute();
$total = $prepara->rowCount();

echo "<br />Total de Cadastros: " . $total."<br />";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>descrição</th><th>Valor</th><th>alterar</th><th>exlcuir</th></tr>";
while ( $linha = $prepara->fetch() ) {
    echo "<tr><td>$linha[id_produto]</td>";
    echo "<td>$linha[descricao]</td>";
    echo "<td>$linha[valor]</td>";
    echo "<td><a href='alt_produto.php?id='/>alterar</td>";
    echo "<td><a href='del_produto.php?id=$linha[id_produto]'/>excluir</td></tr>";
}
?>

<a href="index.php"><button>Volte ao inicio</button></a>
