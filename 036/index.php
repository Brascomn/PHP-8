<!-- NOTAS ADICIONAIS SOBRE PARÂMETROS E VARIADIC PARAMETER -->
<?php

// Uma função nunca pode ser chamda  sem que os valores obrigatiros sejam fornecidos
function funcao($a, $b)
{
    # code...
}
// funcao('Teste');


function funcao2($c){
    // um parâmetro e varios valores, paasando mais arguemnto do que o solicitado.
    $x = func_get_arg(0);
    $y = func_get_arg(1);
    $z = func_get_arg(2);
    echo "$x - $y - $z";

    echo'<br>';
    echo func_num_args();
}

funcao2(10, 20, 30);
echo'<br>';

// VARIADIC PARAMETER
function minhafuncao(...$argumentos){
foreach($argumentos as $v){ 
    echo " $v<br>";
}
}

minhafuncao(10, 20, 30, 40, 50, 60, 70, 80, 90);