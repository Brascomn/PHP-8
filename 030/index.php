<!-- Cilco FOREACH -->
<?php
$nomes = ['joao','ana','carlos'];
foreach($nomes as $nome){
    echo $nome . '<br>';
}

$capitais = [
    'Angola' => 'Luanda',
    'Namibia' => 'Whindoek',
    'Congo' => 'Kinshasa'
];
echo "<hr>";

foreach ($capitais as $key => $value) {
    echo " Para o pais $key a capital é $value. <br>";
}