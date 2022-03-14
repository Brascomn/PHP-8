<!-- CLASSES - PROGRAMAÇ~ÁO OIRENTADA A OBJECTOS -->
<!-- uMA CLASSE É UM MOLDE/ FORMA/ MODELO A PARTIR DO QUAL CIRAMOS OBEJCTOS.

EX:CLASSE HUMANO É UM MODELO DE HOMENS E MULHERES -->
<!-- Palavra resrvada CLASS para a criaç~áo de classes. -->

<?php

    class Humano
    {
        // Propriedades são variáveis que guardan as caracteristicas do objeto. Elas devem ter o novel de acesso especificado.
        // Métodos são funções que definm o que o objeto pode fazer.

        public $nome = 'João';
        public $apelido = 'Sandrenha';
        public function nomeCompleto(){
           return $this->nome.' '. $this->apelido;
       } 

    }
    
    class Atividades
    {
            // Propriedades são variáveis que guardan as caracteristicas do objeto. Elas devem ter o novel de acesso especificado.
            // Métodos são funções que definm o que o objeto pode fazer.

    }


    class figuraGeometrica
    {
        public $largura, $altura;
        public $a;
        public $b;

        function novaArea($a, $b){
            return $n = $a *$b;
        }
    }