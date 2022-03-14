<!-- CRIAÇÃO DE OBJECTOS -->



<?php



class Humano
    {
        // Propriedades são variáveis que guardan as caracteristicas do objeto. Elas devem ter o novel de acesso especificado.
        // Métodos são funções que definm o que o objeto pode fazer.

        public $nome = 'João';
        public $apelido = 'Sandrenha';

        #Para aceder as propriedades de uma classe, dentro dos metodos da classe é usada a pseudo variável $this seguida de ->

        public function nomeCompleto(){
            // $nome = 'Teste'; isso seria uma variável da função e não da class comoos as outrs
           return $this->nome.' '. $this->apelido;
       } 

    }

    // Acess Modifiers s~áo os niveis de acesso que as classes recorrem a utilização.

    $homem = new Humano(); #Funciona, apesar depedir dois parâmetros

    echo $homem-> nomeCompleto();  # João Sandrenha
    //  acedendo as propriedades do mêtodo