<?php
include ('conexao.php');
$prepara = $conexao_pdo->prepare( "SELECT * from usuario");
$prepara-> execute();
?>
<h1>cadastrar produtos</h1>
<form name="frm_cad_usuario" action="grava_produto.php" method="post">

    descrição : <input type="text" name="descricao" size="30"><br />
    valor.........:<input type="text" name="valor" size="10">
    Usuário   :<select name ="usuario">

        <option value="0"> selecione o usuario </option>
        <?php
        while ($Linha = $prepara->fetch() ){
            echo "<option value='$linha[id]'>$linha[nome]</option>";
        }
        ?>
    </select>
    <br><br/>
    <input type="submit" value="cadastrar"/>
</form>