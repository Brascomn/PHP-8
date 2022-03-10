<!-- Break ,Continue e GOTO -->
<?Php
for ($i=0; $i < 20; $i++) { 
    echo $i.'<br>';
    if($i == 10){
        break;
    }
}
echo '<hr>';

$nomes = ['joao','ana','carlos'];
foreach($nomes as $nome){
    echo $nome . '<br>';
   
    if ($nome == 'ana') {
        Break;
    }
}

echo '<hr>';


$nomes = ['joao','ana','carlos'];
foreach($nomes as $nome){
    // echo $nome . '<br>';
   
    if ($nome == 'ana') {
      continue;
    }
    echo $nome . '<br>';
}

echo '<hr>';
for ($i=0; $i < 20; $i++) { 
    echo $i.'<br>';
    if($i == 10){
        continue;
    }
}
echo '<hr>';

for ($i=0; $i < 20; $i++) { 
    if($i == 10){
        goto teste;
    }
    echo $i.'<br>';
}
echo 'Fim do Loop';
teste:
echo '<hr>Aqui ';