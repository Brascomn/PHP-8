<?php
$a= 10.5;

// Concatenação

$c = 'João' . '@' . 'Dog';
$d='Sandrenha';
$d .= ''. 'Dob';

$nome = $c;
$completo = $d;
$nome_completo= $nome . $completo;
$nome_completo2= "$nome $completo";
$nome_completo3= '$nome $completo';

// die();
# Heredoc - Permite fa\er p parse de variáveis
$texto = <<<LABEL
Olá, sr. $d.
Serve a presente mensagem para informar que se encontra inscrito no 
próximo concurso.
Enviamos o regulamento para o seu email $c
Obrigado pela sua simpatia.
LABEL;



# NOWDOC - Não permite parse de variáveis
$texto2 = <<<'LABEL'
Olá, sr. $d.
Serve a presente mensagem para informar que se encontra inscrito no 
próximo concurso.
Enviamos o regulamento para o seu email $c
Obrigado pela sua simpatia.
LABEL;

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
  <?php echo $a ?>
  <br>
  <p>
     
  </p>
  <?php echo $b=$a/2 ?>
  <br>

  <?php echo 'Pre-incremento ' . ''. 'Do valor de b =' . $b ?>
  <br>
  <?php echo $d?>
  <br>
  <?php echo $nome_completo?> <br>
  <?php echo $nome_completo2?> <br>
  <?php echo $nome_completo3?>
  <br>
  <?php echo $texto?>
  <br>
  <?php echo $texto2?>




</body>
</html>