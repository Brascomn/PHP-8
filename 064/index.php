<!-- TYPE CONVERSIONS


EMBORA O PHP PROCURA FAZER DE FORMA AUTOMATICA UMA CONVERSÃO DE DADOS ENTERE DIFERENTES TIPOS, 
É UMA BOA PRÁTICA EXPLICAR ISSO NO CÓIDGO.
UMA VARIÁVEL DO TIPO INT NÃO É O MESMO QUE UMA STRING E VICE-VERSA.


DESIGNAMOS ESTA OPERAÇÃO COMO CONVERSÃO EXPLICITA(EXPLICIT CAST)
-->

<?php

#Podemos fazer a conversão com os principais tipos de valores
# (STRING), (INT), (FLOAT), (ARRAY), ...


$nomes =[
    'BRÁULIO',
    'VALDIR',
    'SANDRENHA',
    'CHIMUANGA'
];
#conversão de um array para object
$nomes1 = (object)$nomes;
echo '<pre>';
print_r($nomes1);
echo '</pre>';

#conversão de uma variável para um array com um valor único

$nomes2 ="BRAULIO";
$losNombres = (array) $nomes2;
echo '<BR>';
echo '<pre>';
print_r($losNombres);
echo '</pre>';

