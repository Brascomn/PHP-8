<!-- IMPORTAÇÃO SCRIPTS INCLUDE_ONCE E REQUIRE_ONDE

INCLUDE_ONCE FUNCIONA COMO O INCLUDE , MAS APENAS FAZ O INCLUDE UMA ÚNICA  VEZ SE O SCRIPT 
JÁ FOI ANTERIORMENE INCLUÍDO, O PHP NÃO VOLTA A INCLUIR OU ENCORPORAR.
REQUIRE_ONCE FUNCIONA COMO O REQUIRE , MAS APENAS FAZ O REQUIRE UMA ÚNICA  VEZ SE O SCRIPT 
JÁ FOI ANTERIORMENE INCLUÍDO, O PHP NÃO VOLTA A INCLUIR OU ENCORPORAR.

-->

<?php 

// INCLUDE

include_once '../script.php';
echo 'Inculido';
echo '<br>';
include_once '../script.php'; #Esta linha não será carregado
echo 'Inculido';


    // REQUIRE
echo '<br>  BBB';
include_once '../script.php';
echo '<br> VVV';
include_once '../script.php';


$paises = require_once 'dados.php';
echo '<br>';
echo 'Países';
echo '<pre>';
print_r($paises);

echo '</pre>';



echo '<br>';

echo 'Países';
echo '<hr>';
 foreach ($paises as $key) {
     echo $key. '<br>';
 }



// SE EXECUTADOS OS INCLUDE_ONCE E REQUIRE_ONCE, APENAS SERÁ LIDO O QUE ESTIVER EM PRIMEIRO.