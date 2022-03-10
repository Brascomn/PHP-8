<?php

# CARACTERES ESCAPES

// $frase_1 = 'I'm going to john's Party' ;
$frase_2 = "I'm going to john's Party";



// $frase_3 = "I'm not sure john "The great" will win this fight.";

$frase_4 = 'I\'m going to john\'s Party' ;

$frase_5 = 'I\'m not sure john \"The great\" will win this fight.';
$frase_6 = "I'm not sure john \"The great\" will win this fight.";

echo " $frase_2"; 
echo "<br>";
echo " $frase_4"; 
echo "<br>";
echo " $frase_5"; 
echo "<br>";
echo " $frase_6";

echo "Joao Ribeiro \n\rTeste";
echo "\n\u{A9} ";
echo "\u{BC} \n";
echo "\u{AE}";

// html Entites
echo '<br>';
echo '&copy;';
echo '&frac14;';
