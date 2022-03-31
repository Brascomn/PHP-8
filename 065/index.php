<!--
    TESTANDO VARIÁVEIS

    VARIÁVEIS , ISSET, EMPTY, IS NULL E UNSET

    ISSET - ESTA CONSTRUÇÃO PERMITE VERIFICARSE UMA VARIÁVEL ESTÁ OU NÃO DEFINIDA.
    RETORNADO TRUE OU FALSE;
-->

<?php

$a=1;
if (isset($aa )) {
    echo 'Variavel Existe <br>';
}else{
  
    echo 'Variavel não Existe <br>';
}
# SE TIVEMOS UMA VARIÁVEL DEFINIDA, MAS O SEU VALOR FOR NULL, É CONSIDERADO COMO UMA VARIÁVEL INEXISTENTE


$b = null;
echo isset($b) ? 'sim' : 'Não';



// EMPTY - VERIFICA SE A VARIÁVEL TEM UMA VALOR VAZIO(NULL, 0, FALSE OU STRING VAZIA) E RETORNA VERDADEIRO OU FALSO


$c = 'Bráulio';
echo empty($c); # false
echo '<br>'; 

$d =false;
echo empty($d); # true

echo '<br>'; 
$nome = [];
echo empty($nome); # true
echo '<br>'; 
$other = null ;
echo empty($other); 


// IS NULL - VERIFICA SE UMA VARIÁVEL TEM VALOR NULL OU NÃO


echo '<br>'; 
$e = 'João';
echo is_null($e); # false

echo '<br>'; 
$f = null;
echo is_null($f); # true


// UNSET - PERMITE DESTRUIR UMA VARIÁVEL. EXISTE 2 FORMAS DE O FAZER.
$g = 'Braulio';
unset($g);
// echo $g;

$h = 'António';
$h =null;