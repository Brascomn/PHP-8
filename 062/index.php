<!-- TYPE DECLARATIONS 

QUANDO DISSEMOS QUE O PHP NÃO É UMA LINGUAGEM TIPIFICADA, ISTO É, AS VARÁVEIS NÃO TÊM NECESSARIAMENTE QUE SER DEFINIDAS COM UM TIPO, NÃO É BEM ASSIM.
É POSSIVEL ESPECIFICAR CLARAMENTE QUE TIPO DE VALOR PODEMOS USAR PARA PARÂMETROS DE FUNCÕES,
PROPRIEDADES DE CLASSES E TIPO DE RETORNO DE FUNÇÕES. -->

<?php

function falar(array $mensagem){
    echo $mensagem;
}
// falar('Braulio'): Não é possível.

function conversar(String $sms){
    echo $sms;
}

// Ele faz a conversão de inteiro para string
conversar(2500);


?>


<!--  AS DECLARAÇÕES DE TIPO FORAM ACRESCIDAS NO PHP 5.1
EX:
O TIPO CALLABLE TEM QUE SER UMA FUNÇÃO, MÉTODO OU OBJETO.
PODEMOS, POR EXEMPLO, USAR UMA FUNÇÃO ANÓNIMA. -->

<?php
$say = function($write){
    echo ' A minha Mensagem é :'. $write;
};

function my_function (callable $functi, $date){
    $functi($date);
}

my_function($say, 'Esta é a minha mensagem.');



// éÉ POSSÍVEL ATRIBUIR TIPOS DE RETORNOS DE DADOS DE UMA FUNÇÃO

function function2():array{
    // return[1,2,3]; io esperado
    return'Olá,Mundo';
}
function function3():string{
    return[1,2,3];
    // return'Olá,Mundo'; o esperado
}


 