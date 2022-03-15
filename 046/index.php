<!-- CLASEES ANÓNIMAS 
ELAS SÓ FAZEM SENTIDO QUANDO QUEREMOS INSTANCIAR APENAS UM OBJECTO DESSA CLASSE-->

<?php


// Exemplo Normal

class objeto1
{
    function teste(){
        echo 'Teste - normal';
    }
}

$a = new objeto1();


# Class Anónima = associação da classe a um variável de forma direita
// Classes anônimas são úteis quando objetos simples e descartáveis precisarem ser criados.

$b = new class {
    function teste(){
        echo 'teste - classe anónima';
    }
};

$a-> teste();
echo "<br>";
$b-> teste();


// class Logger
// {
//     public function log()
//     {
//         echo 'teste - Normala';
    
//     }
// }

// $util->setLogger(new Logger());

// // Usando uma classe anônima
// $util2->setLogger(new class {
//     public function log()
//     {
//         echo 'teste - classe anónima';
    
//     }
// });
// echo "<br>";
// // $util-> log();
// echo "<br>";
// // $util2-> log();
