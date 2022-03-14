<!-- CONSTRUCT e Exemplos -->

<!--  É UM MÉTODO ESPECIAL DENTRO DE UMA CLASSE, QUE É  SEMPRE EXECUTAADO AUTOMATICAMENTE QUANDO É CRIADO
UM OBJECTOS A PARTIR DE UMA CLASSE. ESTE MÉTODO É DEFINIDO DE UMA FORMA ESPECIAL COM 2 UNDERSCORES(__)
APE;ODADPS POR MÉTODOS MÁGICOS POR TERR A EXECUÇÃO ESPECÍFICA OU AUTOMÁTICA ASSOCIADA. -->

<!-- usando a sua palavra reservada __construct -->
<?php



class Humano
    {
        private $nome ;
        private $apelido ;


        #Os contruct são opcionais
        public function __construct ($a, $b){
           
            $this-> nome = $a;
            $this->apelido = $b;
       } 

       public function nomeCompleto(){
       return $this->nome.' '. $this->apelido;

    }
}


    # Os parametros passado são receibos por $a= Boy e $b=Nigga, que depois para para $a >nome e $b > apelido respectivamente
    $homem = new Humano('Boy ','Nigga');
    
    # Os parametros passado são receibos por $a= Lurdis e $b=Azevedo, que depois para para $a >nome e $b > apelido respectivamente
    $mulher = new Humano('Lurdis ','Azevedo');
    
    echo $homem-> nomeCompleto();  # Boy  Nigga
    echo "<br>";
    echo $mulher-> nomeCompleto();  # Lurdis Azevedo

     

    // Para classes que têm construtor sem parâmetros , podemos instanciar da seguinte forma:
    class alien
    {
        function __construct()
        {
            
        }
    }
     # As duas formas são validas
    $jade = new alien;
    $jade = new alien();