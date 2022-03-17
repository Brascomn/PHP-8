<!-- FINAL

PARA IMPEDIR QUE UMA CLASSE DERIVADA POSSA FAZER OVERRIDE DE MÉTODOS PODEMOS 
UTILIZAR A EXPRESSÃO FINAL NO INCIO DO MÉTODO PRETENDIDO -->

<?php


class veiculo{
   
   #final function mover(){
    function mover(){

    }
}
class Bicicleta extends veiculo{
    function mover(){

        // Override do código original
    }
}

#   Podemos, definir uma class como não sendo possivel de ser herdado colocando Final antes da class

class Humano
{
    function teste(){
        echo 'Teste';
    }
}

class Homem extends Humano{

}
// $b = new Homem();
$b = new Homem();
$b->teste();