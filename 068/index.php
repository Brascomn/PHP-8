<!-- APRESENTAÇÃO DE INFORMAÇÕES DE VARIÁVEIS

AS 3 PRINCIPAIS FUNÇÕES FUNDAMENTAIS PARA OBTERMOS INFORMAÇÕES A PARTIR DE VARIÁVEIS DO NOSS CÓDIGO

PRINT_R
VAR_DUMP 
VAR_EXPORT

-->


<?php

// PRINT_R - PERMITE VER DADOS DE UMA VARIÁVEL DE UMA FORMA SIMPLES DE LER.
// USADO FRQUENTEMENTE PARA EFEITOS DE DEBUG
// print_r(): print_r() é uma função regular.


$a = 'Braulio';
echo'<pre>';
print_r($a);
echo '<br>';
$b=[1,2,3];
print_r($b);
echo '<br>';



// VAR_DUMP
//  TEM UM RESULTADO SEMELHANTE AO PRIN_R, MAS PARA ALEM DOS VALORES APRESENTA TAMBÉM A INFORMAÇÃO SOBRE O TIPO DE VALORES

$name = 'Chimuanga';


var_dump($name);

echo'<br>';

$valores = [1,2,3];
var_dump($valores);


// VAR_EXPORT
// APRESEMTA INFORMAÇÕES SOBRE UMA VARIÁVVEL NUM ESTILO QUE PODE SER USADO COM CÓDIGO PHP


$last_name = 'Sandrenha';

var_export($last_name);

echo '<br>';

$credit = [1,2,3];
var_export($credit);
echo '<br>';

$number =[];
for ($i=0; $i < 10; $i++) { 
    $number[]=rand(0,100);
}

var_export($number);

