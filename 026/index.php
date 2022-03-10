<?php
// MAtch trabalha semelhante ao Switch case


$b = 10;
switch ($b) {
    case 5:
        echo 'Parou no 5';
        break;
    
    case 10:
        echo 'Parou no 10';
        break;
    
    case 15:
        echo 'Parou no 15';
        break;
    
    default:
        echo 'é um número diferente de 5, 10 ou 15';
        break;
}

echo '<hr>';

echo match($b){
    5 => 'Parou no 5',
    10 => 'Parou no 10',
    15 => 'Parou no 15',
    default => 'é um numero diferente de 5,10 ou 15'
};

echo '<hr>'; 

$b =20 ;
$opcao = match($b){
    2=>'é 2',
    4, 5, 6 =>'é 4, 5, ou 6',
    default => 'é outro valor'
};
echo $opcao.'macthc';