<!-- OVERRIDING - REESCREVER
O MECANISMO DE OVERRIDING PERMITE A UMA CLASSE DERIVADA TER MÉTODOS 
REESCRITOS ESPECIFICAMENTE PARA ESSA CLASEE -->
<!-- Normalmente usamos OVERRIDE quando queremos mudar o código do interior do método de uma class   -->


<!-- O modificador override é necessário para estender ou modificar a 
implementação abstrata ou virtual de um método, propriedade,
 indexador ou evento herdado. -->

<?php
 
class animal
{
    function mover (){
        echo 'Mover a partir da classe base';
    }
}

class Mamifero  extends animal
{

}

class Peixe extends animal
{

    function mover(){
        echo 'Mover a partir da classe peixe';
    }
}
 
$Animal = new animal();
 echo $Animal->mover();
  echo '<br>';

$mamifero = new Mamifero();
 echo $mamifero->mover();
  echo '<br>';

$peixe = new Peixe();
 echo $peixe->mover();
 echo '<hr>';



# OVERIRDE 
    # Alem do conceito de CLASS BASE e CLASS DERIVADA temos o conceito de parent class ou class pai, que é a classe a partir da qual fazemos a derivação.


    class Rectangulo  #CLASS BASE
    {
        public $largura, $altura;
        function __construct($l,$a)
        {
            $this->largura = $l;
            $this->altura = $a;
        }

        function calcularArea(){
            return $this->largura * $this ->altura;
        }
        // function calcularArea2(){
        //     return $this->largura * 4;
        // }

    }

    class Quadrado extends Rectangulo #CLASS DERIVAA
    {
        function __construct($l)
        {
            $this -> largura = $l;
            $this -> altura = $l;
        }
    }

    $RECT = new Rectangulo(10,20);
    $QUAD = NEW Quadrado(10);

    echo $RECT->calcularArea();
    echo'<br>';
    echo $QUAD->calcularArea();
    echo'<br>';

    # PODEMOS CHAMAR O CONSTRUTOR DA CLASS BASE USANDO A EXPRESSÃO PARENT

    class Quadrado1 extends Rectangulo 
    {
        function __construct($l)
        {
            parent ::__construct($l,$l); 
            #Quando usamos parent estamos a aceder ao construtor da class base
        }
    }
    $QUAD1 = new Quadrado1(5);
    echo $QUAD1->calcularArea();
    echo '<br>';

    // A Expressão parent é um nome alternativo ao nome da class base, 
    // podemos também usar o nome da class base

    class Quadrado2 extends Rectangulo 
    {
        function __construct($l)
        {
            Rectangulo ::__construct($l,$l); 
        }
    }
    $QUAD2 = new Quadrado2(5);
    echo $QUAD2->calcularArea();
