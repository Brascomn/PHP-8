<?php


$frase = 'Esta frase tem 29 caracteres.';
$n='<br>';

echo $frase [0];
echo $n;

echo $frase[5];
echo $frase[6];


// Podemos comparar strings da seguinte forma;
$a = 'Braulio';
$b = 'Valdir';

$c = ($a==$b);   // false
$d = ($a!=$b);   //true

#contagem de todos os caracteres
$numero_cararteres_total = strlen($frase);
echo $numero_cararteres_total
;