<!-- NULL COALESCING OPERATOR

ESTE OPERADOR  É UMATALHO PARA ALGUNS CASOS DO OPERADOR CONDICIONAL TERNÁRIO -->

<?php
$a = null;

$nome = $a ?? 'Sem Nome'; # ??-- aciona a pergunta se $a é nulo, se não for nome recebe o valor #Sem Nome;

$nome1 = isset($x) ? $x : 'Com Nome'; # atribuição do valor em nome, caso $x já tivesse valor atribuido, este valor seria passado para $nomes1 e caso não recebe o valor #comnome e é aribuido a $nomes1 


$last_name = null;
$last_name ??= 'Apelido Desconhecido';
echo $last_name;
echo '<br>';
echo $nome;
echo '<br>';
echo $nome1;