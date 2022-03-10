<?php

// Concatenação

$cliente = 'Braulio Valdir ';
$email = 'Bráulio@gmail.com';



// die();
$to = <<<LABEL
Olá, sr. $cliente.
Serve a presente mensagem para informar que se encontra inscrito no 
próximo concurso.
Enviamos o regulamento para o seu email $email
Obrigado pela sua simpatia.
LABEL;

echo $to;
