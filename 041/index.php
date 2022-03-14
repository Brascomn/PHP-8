<!-- GENERETORS -->

<!-- É UMA FUNÇ~ÁO QUE PERMITE GERAR VALOR EM SÉRIES, 
SENDO QUE CADA VALOR E DEVOLVIDO PELA FUNÇÃO ATRAVÉS DA INSTRUÇÃO YIELD. -->

<!-- AO CONTRARIO DO RETURN, AINSTRUÇ~ÁO YIELD GURADA O ESTADO DA FUNÇÃO PERMITINDO 
QUE CADA FUNÇÃO CONTINUE A PARTIR DO ESTADO ONDE FICOU NA ÚLTIMA CHAMADA.  -->

<?php

function buscar_numero(){
    for ($i=0; $i <= 10; $i++) { 

        yield $i;
    }
}

# A função geradora funciona com um iterador, 
# pondendo ser usada num ciclo até que o gerador não tenha mais valores para devolver com yield

foreach (buscar_numero() as $key => $numero) {
   echo "$numero<br>";
}


# Permitindo devolver valores de outro gerador, devolver Array
function buscar_nome(){
    yield 'Bráulio';
    yield 'Valdir';
    yield 'Sandrenha';
    yield 'Chimuanga';
    yield from ['Universidade', 'Independente', 'de', 'Angola'];

}

echo '<hr>';

foreach (buscar_nome() as $key => $value) {
    echo"$value <br>";
}

# Elas veem para aumentar a perfomance do nossp SCRIPT