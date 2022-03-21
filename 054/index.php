<!-- STATIC - método estatico
Normalmente usados quando o metodo tem uma formula estatica e usavel em varias areas -->


<?php

class Operacoes
{
    static function numeroAleatorio($min, $max){
        #Quiz Numero
        return rand($min,$max);
    }
    static function calcularFormula($a,$b){
        
        return ($a*2)+($b+$a);
    }
    static function criaumNome(){
        #Quiz rand
        $nomes=['Braulio','Valdir','Sandrenha','Chimuanga'];
        $apelidos=['Justina','Viriato','Chavez'];
        return $nomes[rand(0,count($nomes) -1)] . ' '. $apelidos[rand(0,count($apelidos) -1)];
    }
}
echo Operacoes ::numeroAleatorio(0,150);
echo '<br>';
echo Operacoes ::calcularFormula(0,150);
echo '<br>';
echo Operacoes ::criaumNome();