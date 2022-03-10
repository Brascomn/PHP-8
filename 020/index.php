<?php 
$nome = "Bráulio";
$sobrenome ="Chimuanga";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>

    <h3> <?php echo "O meu nome é $nome".' '."$sobrenome"?></h3>

    <h3>O meu nome é :</h3>
    <h1> <?php echo $nome .' '. $sobrenome?></h1>

    <p><?= $nome .' ' .$sobrenome?></p>
    <p >mb_Strlen e Strlen</p>
    
    <!-Concatenação e número de caracteres -->

    <p><?= "O meu nome tem " .strlen($nome.$sobrenome) .' Caracteres .#Strlen' ?></p>
    
    <!-- Quando temmos acentuações nos nomes , devemos usar mb_strlen -->
    <p><?= "O meu nome tem " .mb_strlen($nome.$sobrenome) .' Caracteres .#>mb_Strlen' ?></p>
    
</body>
</html>