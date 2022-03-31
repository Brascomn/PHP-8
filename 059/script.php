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
$data = new DateTime();


define('APP_NAME','Minha Aplicação');
define('VERSAO','1.0.0');
define('MOSTRAR_ERROS',true);
define('PI',3.14);

//  FUNCÃO DEFINE NÃO RECEBE VALORES DO TIPO:

# APP_NAME = 'TESTE'; 'ERRO

echo '<br>';
ECHO APP_NAME;
echo '<br>';