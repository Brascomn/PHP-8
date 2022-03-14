<!-- PARÂMETRO NAMED ARGUMENTS -->

<?php

// Metodo em php 7, adicionado valor na função e manter o mesmo valor em b
function adicionar ($a, $b = 10 ,$c = 20){

    echo $a + $b + $c;
}
adicionar(100, 10, 3000);

    echo'<br>';

// em Php 8 adicionado valor na função e manter o mesmo valor em b
adicionar( c: 100, a: 9);
    echo'<br>';

// em Php 8 adicionado valor na função e manter o mesmo valor em b
adicionar( 10, 9);