<!-- ACESS LEVEL 


- ASPECTPS IMPORTANTES A RETER-


UMA BOA PRÁTICA É CRIAR O MENOR NÚMERO DE PROPRIEDADES DE UMA CLASSE COMO PÍBLICAS.
coLOCAR UMA PROPRIEDADE COMO PÚBLICA É EXPOR EM DEMASIA ESSA PROPRIEDADE.




UM EX:IMAGINEMOS QUE QUEREM QUE UMA PROPRIEDADE DE UMA CLASSE SEJA SEMPRE UM NÚMERO. -->
<?php

use Humano as GlobalHumano;

class Humano
{
    public $idade;
}
$eu = new Humano();
$eu->idade = 'Olá Mundo'; # ISTO É POSSÍVEL PORQUE O PHP NÃO É STRONGLY TYPED7


# PARA DEFINIR CORRETAMENTE ESTE TIPO DE SITUAÇÕES, PODEMOS USAR MÉTODOS PARA DEFINIR E IR BUSCAR OS VALORES DAS PROPRIEDADES PRIVADAS.
#ESTES MÉTODOS PERMITEM GARANTIR QUE A INTEGRIDADE DAS PROPRIEDAS SEJA MANTIDA.

    class Humano1
    {
        private $idade;
    }
   # $eu1->idade = 'joao'; #Não é possível porque a propriedade é privada.

?>

<?php
 class humano2{
     private $idade2=0;

     public function setIdade($valor){
         #validação apenas de números
         if (is_numeric($valor)) { 
             $this->idade2 = $valor;
         }
     }

     public function getIdade(){
         return $this->idade2;
     }

 }
 $eu2 = new humano2();
 $eu2->setIdade('João');
 echo $eu2->getIdade();
 echo '<br>';
 $eu2->setIdade(12);
 echo $eu2->getIdade();
 echo '<br>';
 echo '<hr>';



class tempo{
    private $segundos;


    function setSegundos($valor){
        if (!is_numeric($valor) || $valor <0) {
            $this->segundos = 0;

        } else {
            $this->segundos = $valor;
        }
    }

    public function getSegundos(){
        return $this->segundos;
    }


    #Reavaliar essa funcão
    function getMinutos(){
        return $this-> segundos / 60 ;
    }

    function setMinutos($valor){
        if ($valor == 0) {
          $this->segundos = 0;
        }else{
            $this->segundos = $valor *  60;
        }

    }

    
}

 $eu3 = new tempo();
 $eu3->setSegundos('JJ');
 echo $eu3->getSegundos();
 echo '<br>';
 $eu3->setMinutos(2);
 echo $eu3->getMinutos();
 echo '<br>';
 echo '<hr>';
?>
