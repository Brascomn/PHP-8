<!-- VAR E OBJECT ACESS 

A EXPRESSÃO VAR TEM O MESMO COMPORTAMENTO DE PUBLIC, MAS APENAS EXISTE POR RETROCOMPATIBILIDADE DEVIDO AO CÓDIGO ESCRITO ANTES DO PHP5.
NÃO É RECOMENDAVEL USAR PORQUE PODERÁ EM BREVE PASSAR A SER NÃO SUPORTADO-->
<?php

class Homem
{
    var $nome;
    var $apelido;
}
$eu =new Homem('','');
$eu-> nome= 'Bráulio';
$eu-> apelido= 'Bráulio';


?>
<!-- 
    OBJECT ACESS

    NO PHP, UM OBJETO INSTANCIADO A PARTIR DE UMA CLASSE PODEMOS ACEDER A ELEMENTOS PRIVADOS 
    E PROTEGIDOS DE OUTRO OBJECTO CRIADO A PARTIR DA MESMA CLASSE.
    ESTE COMPORTAMENTO N~ÁO ACONTECE NA MAIOR PARTE DAS LINGUAGENS DE PROGRAMÇÃO.

 -->

 <?php

 class Humano{

     
     private $nome ='X';
     function setPrivate($objecto, $valor){
         $objecto->nome = $valor;
     }

     function apresentar(){
         echo $this->nome;
     }


    }

    #Variação de apresentação do nome
    $a = new humano();
    $b = new humano();
    $a->setPrivate($b, 'BVSC');

    $a->apresentar();
    echo '<br>';
    $b->apresentar();