<!-- VERIFICAR O TIPO DE VARIÁVEL

O PHP CONTÉM UM CONJUNTO VASTO DE FUNÇÕES QUE PERMITEM AVALIAR
 QUE TIPO DE DADOS ESTÃO ARMAZENADO NA VARIÁVEL.
-->

<?php

$name = 'My Love';
$age = 26;
$awake = true;

if (is_array($name)) {
    echo 'É UM ARRAY';
} else {
    # code...
    echo 'NÃO É UM ARRAY';
}
 echo '<br>';

if (is_bool($awake)) {
    echo 'É UM BOOLEANO';
} else {
    # code...
    echo 'NÃO É UM BOOLEANO .';
}

$var = "Minha variável";
echo '<br>';
if (is_string($var)) {
    echo 'É uma string';
} else {
    echo 'Não é uma string';
}
?>
<!-- 
    is_array = Verifica se a variável é um array.
is_bool = Verifica se a variável é um booleano.
is_callable = Verifica se o conteúdo da variável pode ser chamado como uma função.
is_double = Mesma coisa que is_float.
is_float = Verifica se a variável é do tipo float.
is_int = Verifica se a variável é do tipo inteiro.
is_integer = Mesma coisa que is_int.
is_long = Mesma coisa que is_int.
is_null = Informa se a variável é NULL.
is_numeric = Verifica se a variável é um numéro ou uma string numérica.
is_object = Verifica se a variável é um objeto.
is_real = Mesma coisa que is_float.
is_resource = Verifica se a variável é um resource.
is_scalar = Verifica se é uma váriavel é escalar.
is_string = Verifica se a variável é do tipo string.
 -->

 <?

// Alem das funções citadas acima, também podemos usar a função gettype,
# que retorna uma string contendo o nome do tipo da variável, 
# por exemplo, string, array, boolean, etc...

// Veja um exemplo de como utilizar a função gettype:


$var = "Minha variável";
$type = gettype($var);

if ($type == "string") {
    echo 'É uma string';
} else {
    echo 'Não é uma string';
}



