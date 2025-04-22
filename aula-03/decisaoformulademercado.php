<?php
$x = 9;
$y = 9;
$media = ($x + $y) / 2;

if ($media >= 6.0){
    echo 'Aprovado';
    die;
} 

if($media <= 4.0){
    echo 'Aluno em recuperação';
    die;
}
else{
    echo 'Aluno Reprovado';
    die;
}
?>