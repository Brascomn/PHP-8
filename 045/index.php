<!-- PROPERTY PROMOTION NO PHP -->

<!-- PODEMOS TER CLASSES SEM QUALQUER 
TIPO DE MÉTODO E PODEMOS TER CLASSES SEM QUALQUER TIPO DE PROPRIEDADE -->
 
<?php

// class Humano1{
//     #Apenas propriedades
//     public $nome;
//     public $apelido;
// }


// class Humano2{

//     #Apenas métodos

//     public function falar(){
//     #fora
//     }

//     private function andar(){

//         #dentro
//     }
//     public function movimento(){
//         $this->andar();
//         #fora + dentro
//     }
// }
// #Ao instanciar o C_H!, podemos aceder direitamente as suas propriedades,
// # pelo facto de estarem identificadas como Acess Modifier PUBLIC

// $homem = new Humano1();
// $homem -> nome = "Bráulio";
// $homem -> apelido = "Sandrenha";


// $mulher = new Humano2 ();
// $mulher -> movimento();


// PROPERTY PROMOTION foi introduzido no construtor no PHP 8, 
#isto permite defnir propriedades direitamente nos parâmetros do constructor.

# ANTES DO PHP 8
class Humano
    {
        public $nome ;
        public $apelido ;

       public  function __construct ($a, $b){
           
            $this-> nome = $a;
            $this->apelido = $b;
       } 
    }

    #Depois do PHP 8 com property promotion
    class Humano3
    {
      
        public function __construct ( $nome, $apelido) #(Public  $nome, Public $apelido) apresenta erro e expented
        {
           
            $this-> nome = $nome;
            $this->apelido = $apelido;
       } 
    }

    $alien = new Humano('Braulio', 'Valdir');
    $alien2 = new Humano3('Sandrenha ', 'Chimuanga');

    echo $alien -> nome . ' ' .$alien->apelido;
    echo "<br>";
    echo $alien2 -> nome . ' ' .$alien2->apelido;

    // Ao contrário do nome das variáveis, o nome das classes é case insensitive
    
     $alien_3 = new humano3('Nome', 'Apelido');
     echo"<br>";
     echo $alien_3-> nome . ' ' . $alien_3->apelido;
 