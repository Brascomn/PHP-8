<!-- IMPORTAÇÃO SCRIPT REQUIRE  

     O REQUIRE É MUITO SEMELHANTE AO INCLUDE.
     AS MESMAS REGRAS DE DEFINIÇÃO DOS CAMINHOS SÃO APLICADOS.
     A DIFERENÇA ENTRE O INCLUDE E O REQUIRE É QUE, NO CAOS DO INCLUDE FALHAR , O CÓDIGO AVANÇA COM UM AVISO.
     MO CASO DO REQUIRE FALHAR, A APLICAÇÃO TERMINA COM UM ERRO.

          OS CAMINHOS SÃO OS MESMOS QUE OS INCLUDES
-->


<?php 


include ' teste.php';

echo 'Momento';
echo '<br>';
require  ' teste.php';
echo 'Momento';

?>

<!-- É ACONSELHAVEL O USO DO REQUIRE, UMA VEZ QUE, ACONTECENDO UM ERRO DE IMPORTAÇÃO DP SCRIPT,
 A APLICAÇÃO NÃO IRÁ AVANÇAR COM ERROS -->