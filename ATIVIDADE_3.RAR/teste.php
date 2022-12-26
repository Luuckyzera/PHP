<?php
//Uma simples saída JSON
$object = new stdclass();
$object->mensagem = "OLA MUNDO AQUI QUEM FALA E GUDANZINHO";
echo json_encode($object);
?>
