<!-- Operador Ternário -->

<?php

$opcao =0;
$nome = $opcao == 1 ? 'Joao' : 'Antonio ';
echo $nome;

echo $opcao == 0 ? 'Sim' : 'Não';
?>
<?php
if ($opcao == 1) {
    echo 'Sim';
}else{
    echo 'Não';
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<h2 style = "color : <?= $opcao == 0 ? 'red' : 'blue'?> " >Este texto foi definifo pelo php</h2>
</html>