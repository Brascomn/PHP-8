<!-- STRINCT TYPING 
DECLARAÇÃO ABSOLUTTA DOS VALORES DAS VARIÁVEIS.

declare(strict_types=1);
é  aconselhavel usar no princípio do código. O seu posicionamento pode ser alterado
-->

<?php
declare(strict_types=1);

function speak(string $spook){
    echo $spook;
}

speak('Olá, Mundo');
speak(200); # invalido quando usamos declare(strict_types=1);

function plus (int $b, int $c){

    return $b + $c;
}

echo plus(10,20);
echo plus('a','b'); #invalido quando usamos declare(strict_types=1);

# COM O PHP 8 APARECEU A POSSIBLIDADE DE DEFINIRMOS MAIS DO QUE UM TIPO PARA O MESMO ARGUMENTO
# SÃO SEPARADOS POR (|)

function speak2(int|string $spook2){
    echo $spook2;
}

speak2('Olá, Mundo');
speak2(2500); 


function less (int | float $v):int|float{

    return $v/$v;
    return 'Bráulio';
}
echo less(26);
// echo less('Benga');



