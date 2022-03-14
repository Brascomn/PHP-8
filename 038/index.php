<!--ESCOPO E CICLO DE VIDA DE UMA VARIÁVEL -->

<?php

# Normalmente uma variável de php passa a existir a partir do local onde é iniciado e existe até ao final da página.
# No entanto, quando temos variáveis dentro de uma função, eles t^m um ciclo de vida limitado.

$variavel = 10;
echo "<p>$variavel  </p>";
echo "<br> <hr>";


funcao (20, 40);

// echo "<p>$a e $b </p>"; #esta vvariáveis so existem dentro da função

function funcao($a, $b){
    // echo "<p>$variavel </p>"; # Esta variavel não eé conhecida dentro da função
    echo "<p> $a e $b</p>";
}

echo "<br> <hr>";
    #GLOBAL
    $a = 10;
    function f(){
        global $a; #traz para  dentro da função a variável que esta fora.
        $a =20;
    }
    f();
    echo"$a";

    echo "<br> <hr>";
    $b = 100;
    function g(){
        // $b =20;
        $GLOBALS ['b'] = 200; # Um array de super global
    }
    g();
    
    echo"<p>$b</p>";
    
    
    echo "<hr>";
    
    // Ao contrario de outras linguagens, no php , as variáveis definidas dentro de loops ou
    // instruções condicionais, não s~áo destruidas dentro desse escopo.
    if (true) {
        $v = 26;
    }
    
    echo "<p>$v</p>";
    
    echo "<hr>";
    for ($w=0; $w < 10 ; $w+=2) { 
        $x = 3;
        echo "<p> $w e $x <br>";
    }
    
    echo "<p> Isso esta fora do bloco. <br> $w e $x";
