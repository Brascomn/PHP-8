<!-- ACESS LEVELS- NIVEIS DE ACESSO 
EXISTEM 3 TIPO DE NIVEIS DE ACESSO A ELEMENTOS DENTRO DE UMA CLASSE
PUBLIC - PROTECTED - PRIVATE-->

<?php

 class MinhaClass
 {
     public $v1;
     protected $v2;
     private $v3;
 
    }

    # PUBLIC SÃO OS MENBROS PÚBLICOS(PROPRIEDADES OU METODOS) DE UMA CLASSE, ESTÃO SEMPRE ACESSIVEIS.
    # TUDO O QUE ESTIVER NESTA CLASS É ACESSIVEL, MUDADO E EXECUTAVEL A QUALQUER LADO



    class Publico{
        public $propriedade;
        public function metodo(){
            echo 'Método Publico';
        }
    }
    $obj1 = new Publico();
    $obj1-> propriedade = 'A';
    $obj1->metodo();


    ## PROTECTED ##
    #É UM ELEMENTO QUE PODE SER ALCANÇADO DENTRO DA CLASSE E
    # DENTRO DE  UMA QUALQUER CLASSE QUE SEJA UMA EXTENSÃO DE OUTRA CLASSE.


    class Teste 
    {
        public $publica = "a";
        protected $protegida ="b";
        private $privada = "c";
    }

    class derivada extends Teste
    {
        function teste1(){
            echo $this->publica;   # Possível
            echo $this->protegida; # Possível
            echo $this->privada;   # Erro
        }
    }

    $a = new Teste();
    $a->publica = "1";      # Possível
    $a->protegida = "2";    # Gera Erro 
    $a->privada = "3";      # Gera Erro
 
   
   
    $b = new derivada();
    $b->publica = "a";      # Possível
    $b->protegida = "b";    # Gera Erro 
    $b->privada = "c";      # Gera Erro
    

    # PRIVATE ##
    # SÓ PODE SER VISIVEL DENTRO DA PRÓPRIA CLASSE, NÃO É VISÍVEL NOS OBJECTOS INSCTANCIADOS NEM NOUTRAS CLASSES HERDADAS
    # AO CONTRARIO DAS PROPRIEDADES, OS MÉTODOS NÃO NECESSITAM DE TER UM NIVEL DE ACESSO ESPECIFICADO CLARAMENTE, SE NÃO FOR IDENTIICADO,
    # POR DEFEITO O MÉTODO É PUBLICO


    class teste2 
    {
        // public $valor;
        public $valor = "a";
        function mover()
        {

            echo'<br> lol <br>';
            echo $this->valor;
    }
        
    }
    $w = new teste2();
    $w->mover();
    // $w->valor();
    // $w->valor(1);
