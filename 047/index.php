<!-- HERANÇA  
É UM MECANISMO ATRAVES DO QUAL PDOEMOS CRIAR CLASSES QUE HERDAM 
PROPRIEDADES E MÉTODOSDE OUTRA CLASSE.

A CLASSE INICIAL A PARTIR DA QUAL OUTRAS VÃO SER CRIADAS, É DESIGNADA POR CLASSE BASE.

TODAS AS CLASSES INICIAL QUE VÃO HERDAR PROPRIEDADES E MÉTODOS DDE CLASSE BASE SÃO DESIGNADAS POR CLASSES DERIVADAS.
-->
<!-- 
    PARA HERDAR UMA CLASSE A PARTIR DE OUTRA, USAMOS A EXPRESSÃO EXTENDS
 -->

<?php

class animal
{
    public $especie;
    public $peso;

    function tipoEspecie(){
        return "Este animal é da especie $this->especie e pesa $this->peso kg.";
    }
}

$animal  = new animal();
$animal -> peso = "45";
$animal -> especie = 'Mamiferos';
echo $animal->tipoEspecie();


class Mamiferos extends animal{

    #Ela herdou tudo o que a class Base #Animal tem $especie e $peso
    #Ainda assim podemos acrescentar

    public $qtdd_perna;
    public $tem_pelo;
    function temquantaspernas(){
        return " O animal da espécie $this->especie tem $this->qtdd_perna";
    }
}

$mamifero = new Mamiferos();
$mamifero-> especie = 'Cavalo';
$mamifero-> qtdd_perna = 4; 
echo $mamifero->temquantaspernas();