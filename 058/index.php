<!-- TRAITS E A SUA UTILIDADE

SÃO UM GRUPO DE MÉTODOS QUE PODEM SER INSERIDOS DENTRO DE CLASSES.

FORAM ADICIONADOS Á LINGUAGEM NA SUA VESRÃO 5.4 PARA AUMENTAR A REUTILIZAÇÃO DE CÓDIGO.

OS TRAITS SÃO DEFINIDOS COM A EXPRESSÃO TRAIT, SQEGUIDA PELO NOME E POR UM BLOCO DE CÓDIGO.
AS REGRAS PARA DAR NOMES A TRAITS SÃO AS MESMAS QUE USAMOS NAS CLASSES

-->
<?php
 trait MinhasHabilidades{
     public function falar($mensagem){
         echo "Eu digo : $mensagem";
     }
     public function saltar($metros){
         echo "Eu salto : $metros metros";
     }
 }
 # AS CLASSES QUE NECESSITAREM DE USAR ESTES MÉTODOS DO TRAIT, APENAS TERÃO QUE TER O SEGUINTE


 class humano{
     use MinhasHabilidades;
 }

 $b = new humano();
 $b->falar("Olá, Mundo ". 2);
 echo '<br>';
 $b->saltar(2);