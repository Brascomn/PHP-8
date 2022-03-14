<!-- A EXXPRESSÃO RETURN NUMA FUNÇÃO -->

<?php
$nome = 'Brulio';
if(avaliar_nome($nome)){

    echo " - O cliente está correto. $nome é igual Bráulio.";
}else{
    
    echo " - O cliente está errado. $nome é diferente de Bráulio.";
}

function avaliar_nome($n){
    if ($n ==='Bráulio') {
        echo 'True';
        return true;
    } else{
        echo 'False';
        return false;
    }
}

function teste(){

}

if(teste()===null){
    echo '<br> <hr> A função com o retorno  igual a nulo.';
}