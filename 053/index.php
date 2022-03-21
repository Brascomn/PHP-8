<!-- STATIC 
 A PALAVRA CHAVE STATIC PODE SER USADA PARA DECLARAR PROPRIEDADES E MÉTODOS DE UMA CLASSE 
QUE  PODEM SER ACEDIDOS SEM QUE SEJA NECESSÁRIO CRIAR UM OBEJTO A PARTIR DESSA CLASSE. -->

<?php


class Teste
{
    // Instance members - um membro por cada objeto criado a partir da classe
    public $nome ;
    function teste2(){
        
    }

    #Static ou class membrs - apenas existentes uma vez na class
    static $idade;
    static function mover(){

    }
}

// $eu=new Teste();
// echo $eu->teste2();


class Operacoes{
    static $valor1;
    static $valor2;

    static function adicionar(){
        return self::$valor1 + self::$valor2;
        // return Operacoes::$valor1 + Operacoes::$valor2;

    }
}

// (-> é usado quando temos objectos criados a partir da class)

Operacoes::$valor1 = 10;
Operacoes::$valor2 = 20;
echo Operacoes::adicionar();