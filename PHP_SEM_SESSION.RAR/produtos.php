<?php
include ('conexao.php');


$id =$_GET['id'];
$prepara = $conexao_pdo->prepare("SELECT * FROM produtos where usuarios=$id");
$prepara->execute();
$total = $prepara->rowCount();

echo "<table border = '1'>";
echo "<Tr><th>ID</th><th>Descrição</th><th>Valor</th><th>Excluir</th><th>alterar</th></Tr>";

while ( $linha = $prepara ->fetch()){
    echo "<tr><td>$linha[id_produto]</td>";
    echo "<td>$linha[descricao]</td>";
    echo  "<td>$linha[valor]</td>";
    echo  "<td><a href='del_produto.php?id=$linha[id_produto]'>EXCLUIR</a> </td></tr>";



}

