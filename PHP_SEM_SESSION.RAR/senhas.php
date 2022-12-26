<?php
$senha = 416813843613;


$senha_segura = password_hash($senha , PASSWORD_DEFAULT);


echo $senha_segura;