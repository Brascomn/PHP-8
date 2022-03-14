<!-- CLOSEURS e ARROW FUNCTION -->
<?php
// São funções anónimas que podem usar variáveis de escopo globais

$b = 10;
$v = 12;

$minhaClosure = function($s) use ($b, $v){
echo "$b - $v - $s";
$s +=100;

};

$minhaClosure(26);
// echo "<p>$s</p>";



// ArrowFunction
$a = 10;
$e = 12;

// usam a palavra reservada fn e n~áo necesitam do return nem chaves / chavetas 
$minhaArrow = fn($r) => "$a - $e -$r";

echo $minhaArrow(2);