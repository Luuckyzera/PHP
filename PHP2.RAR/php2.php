<DOCTYPE.HTML>
    <lang = 'pt-br'>
    <head>
        <title>lista 2</title>
    </head>
<body>
<?php

/*
$nm1 = $_POST ['nm1'];
$nm2 = $_POST ['nm2'];
$nm3 = $_POST ['nm3'];
$nm4 = $_POST ['nm4'];
$nm5 = $_POST ['nm5'];
$pesc = $_POST['pesc'];
///////////////////////
//////exericio 1///////
///////////////////////



    $os = array("$nm1", "$nm2", "$nm3", "$nm4", "$nm5");
    if(array_search($recb ="$nm1" || "$nm2" || "$nm3" ||"$nm4" ||"$nm5", $os )){
       echo $recb;
    }if ($pesc == $recb){
        echo $pesc;

}

/////exercicio 2///////

$idad1 = $_POST['id1'];
$idad2 = $_POST['id2'];
$idad3 = $_POST['id3'];
$idad4 = $_POST['id4'];
$idad5 = $_POST['id5'];
$recbM =             0;
$recbm =             0;

        $idad = array ("$idad1"."$idad2","$idad3","$idad4","$idad5");
        if($idad1 && $idad2 && $idad3 && $idad4 && $idad5>= 18){
            $recbM++;
            echo  $recbM;
        }else if ($idad1 && $idad2 && $idad3 && $idad4 && $idad5 < 18){
            $recbm++;
            echo $recbm;
        }
//////exercicio 3 //////////

*/
$ets = $_POST['ets'];

$estados = array("AC" => "Acre", "AL" => "Alagoas", "AM" => "Amazonas", "AP" => "Amapa¡", "BA" => "Bahia", "CE" => "Ceara¡", "DF" => "Distrito Federal", "ES" => "Espirito Santo", "GO" => "Goias", "MA" => "Maranhão", "MT" => "Mato Grosso", "MS" => "Mato Grosso do Sul", "MG" => "Minas Gerais", "PA" => "ParÃ¡", "PB" => "Paraiba", "PR" => "Parana¡", "PE" => "Pernambuco", "PI" => "Piaui", "RJ" => "Rio de Janeiro", "RN" => "Rio Grande do Norte", "RO" => "RondÃ´nia", "RS" => "Rio Grande do Sul", "RR" => "Roraima", "SC" => "Santa Catarina", "SE" => "Sergipe", "SP" => "SÃo Paulo", "TO" => "Tocantins");

  
    $pontos = array("Zé"=>"11", "José"=>"4", "Zéca"=>"22");

    echo "Pontos do Zé: ".$pontos["Zé"]."<br/>";
    echo "Pontos do José: ".$pontos["José"]."<br/>";
    echo "Pontos do  Zéca: ".$pontos["Zéca"]."<br/>";

//////////exercicio 4 //////////



////////exercicio 5 ////////////

/*

$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];
$op =      $_POST['operacao'];


if($op == 'soma'){
    $recbS = $numero1 + $numero2;
    echo $recbS;
}elseif ($op == 'subtraçao'){
    $recbS = $numero1 - $numero2;
    echo $recbS;
}else if ($op == 'multiplicar'){
    $recbS = $numero1 * $numero2 ;
    echo $recbS;
}else if ($op == 'divisao'){
    $recbS = $numero1 / $numero2 ;
    echo $recbS;
}

///////////exercicio 6//////////////////

$nome = $_POST['nmalu'];
$nota = $_POST['notafinal'];


if($nota < 60){
    echo ("aluno".$nome.  "foi reprovado");
}else if($nota > 60 || $nota <= 80){
    echo ("aluno".$nome.  "foi aprovado conceito C");
}else if ($nota >81 || $nota <= 90 ){
    echo ("aluno".$nome.  "foi aprovado conceito B");
}else if ($nota > 91 || $nota <= 100){
     echo ("aluno" .$nome. " foi aprovado conceito A");
}

*/



    ?>
</body>

</DOCTYPE.HTML>