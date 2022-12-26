<?php
include ('conexao.php');
$id=$_GET['id'];
//Dados para popular Select usuario
$sql_usuarios = $conexao_pdo->prepare('SELECT * from usuarios');
$sql_usuarios->execute();

$prepara = $conexao_pdo->prepare("SELECT * from produtos where id_produto=$id");
$prepara->execute();
$produto = $prepara->fetch();
?>
<h1>Alterar Produtos</h1>
<form name="frm_alt_produtos" action="upd_produto.php" method="post">

    ID:.........:<input type="text" name="id" size="5" readonly="readonly" value="
    <?php echo $produto['id_produto']; ?>"><br />
    Descrição: <input type="text" name="descricao" size="30" value="

    <?php echo $produto['descricao']; ?>">        <br />
    Valor.......: <input type="text" name="valor" size="10"  value="

    <?php echo $produto['valor']; ?>">

    Usuário:<select name="usuarios">
        <option value="0">Selecione o usuário</option>
        <?php
        while ( $linha = $sql_usuarios->fetch() ) {
            if ($linha[id]==$produto[usuario]){
                echo "<option selected='selected' value='$linha[id]'>$linha[nome]</option>";
            }else{
                echo "<option value='$linha[id]'>$linha[nome]</option>";
            }
        }
        ?>
    </select>
    <br/><br/>
    <input type="submit" value="ALterar" />
</form>