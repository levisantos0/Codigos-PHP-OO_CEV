<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);

$nome = 'Eduardo';
$idade=30;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
    for($i=0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil') {
            echo "O nadador ". $nome. " compete na categoria infantil";
        }
    }
} else if($idade>=13 && $idade<=18) {
        for($i=0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolescente') {
            echo "O nadador ". $nome. " compete na categoria adolescente";
        }
    }
} else{
        for($i=0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto') {
            echo "O nadador ". $nome. " compete na categoria adulto";
        }
    }
}


//$A = 5;
//$B = 10;
//$C = $A+$B;
//
//echo $C >= $A and $C >= $B;

