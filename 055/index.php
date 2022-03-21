<!-- CONSTANTES, DEFINES E DEFINED -->




<!-- 
    CONSTANTES- CONST 
     SÃO VARIÁVEIS CUJO VALOR ATTRIBUIDO NA SUA DEFINEÇÃO NÃO PODE SER ALTERADO AO LONGO DO SCRIPT DE PHP.
    O PHP PERMITE DEFINIR CONSTANTES DE DUAS FORMAS: COM O TERMO CONST E COMO MÉTODO DEFINE
    AO CONTRARIO DAS PROPRIEDADES PUBLIC, PROTECTED OU PRIVATE, AS PROPRIEDADES CONST ESYÃO SEMPRE VISÍVEIS(SÃO PUBLICAS).
    COMO NÃO PODEM SER ALTERADAS NO VALOR, N~ÁO EXISTE O RISCO DE FICAREM EXPOSTAS.

    PARA DEFINIR UMA CONSTANTE, O NOME DEVE SER SEMPRE EM AMAIÚSCULOS, 
    #PODENDO SER USADAS NÃO É NECESSÁRIAO O SINAL DO DOLLAR COMO NAS VARIÁVEIS NORMAIS

 -->

 <?php

 class circulo 

 {
     const PI = 3.14;
 }

// Podendo ser apresentada sem instanciar
 echo circulo::PI; 
 echo '<br>';
 #ou 
 $c = new circulo();
 echo $c::PI; 
 echo '<br>';
 echo '<hr>';
 
 
 # O TERMO CONST NÃO DEVE SER APLICADO A VARIÁVEIS LOCAIS OU A PARÂMENTROS.
 #DESDE O PHP5.3, O TERMO CONST PODE SER USADO PARA CRIAR CONSTANTES GLOBAIS.
 #ESSAS CONSTANTES SÃO DEFINIDAS NO ESCOPO DO SCRIPT E FICAM AUTOMATICAMENTE ACESSIVEIS
 
 const app_name = 'Minha Aplicação';
 echo app_name;
 echo '<br>';
 function teste(){
     echo app_name;
 }

 teste();


 # NÃO É POSSÍVEL CONCATENAR CONSTANTES DA MESMA FORMA QUE FAZEMOS COM VARIÁVEIS
 echo"<br> Nome: {$app_name}";
 echo"<br> Nome: $app_name";
//  apenas
 echo"<br> Nome:" .app_name; 
 
 
 echo '<br>';
 echo '<hr>';
 #DEFINE
 #DEFINE É UMA FUNÇÃO QUE PERMITE DEFINIR CONSTANTES GLOBAIS E LOCAIS, MAS NÃO PERMITE SER USADA DENTRO DO CONTEXTO DE UMA CLASSE
 
 echo "Define";

 define('APP_NAME','Minha Aplicação');
 define('VERSAO','1.0.0');
 define('MOSTRAR_ERROS',true);
 define('PI',3.14);
 
 //  FUNCÃO DEFINE NÃO RECEBE VALORES DO TIPO:

 # APP_NAME = 'TESTE'; 'ERRO
 
 echo '<br>';
 ECHO APP_NAME;
 echo '<br>';
 
 #POR NORMAS DEVEMOS DEFINIR OS NOMES DAS CONSTANTES SEMPRE COM MAIÚSCULA.
 #EM VERSÕES ANTERIORES DA LINGUAGEM ERA POSSÍVEL USAR UM TERCEIRO PARÂMETRO
 #PARA INDICAR QUE A CONSTANTE ERA CASE INSENSITVE. DESDE O PHP 7.3 ESTA OPÇÃO JÁ NÃO É MAIS VÁLIDA
 
 define('CONSTANTE' ,100 ,true); #antes do php 7.3
 define('CONSTANTEs' ,100); #antes

//  echo CONSTANTE.'<br>'; era e ainda possível usar esta expressão
//  echo constante.'<br>'; era possível usar esta expressão
echo CONSTANTE.'<br>'; 
echo '<br>';
echo CONSTANTEs.'<br>'; 
echo '<br>';
echo '<hr>';

echo"VERIFICAÇÃO DE EXISTENCIA DA CONSTANTE";
if (!defined('APP_NAME')) { # se não esta definido
    define('APP_NAME', 'Minha App');
}

echo '<br>';
echo APP_NAME;
echo '<br>';

#ou mais comum ainda...
defined('CONSTANTE3') or define('CONSTANTE3','valor');
echo CONSTANTE3;
echo '<br>';

# COM O PHP 5.6 PASSOU A SER POSSÍVEL DEFINIR UMA CONSTANTE COM UM ARRAY
#ATT. MAS NÃO COM DEFINE

const NOMES=['BRAULIO','VALDIR','SANDRENHA','CHIMUANGA'];
echo NOMES[0];
echo '<br>';

#APENAS COM PHP 7, PASSOU A SER POSSÍVEL USAR ARRAYS NO DEFINE
define('NAMES',['BRAULIO','VALDIR','SANDRENHA','CHIMUANGA']);
echo NAMES[2] . NAMES[3];
echo '<br>';
echo NAMES[1] .' ' . NAMES[2];