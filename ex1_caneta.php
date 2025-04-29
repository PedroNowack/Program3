<?php
//Definindo a classe Caneta

    class Caneta {
        public $cor;
        public $marca;
        public $ponta;
        public $tamanho;
        public $carga;
        // Métodos da classe Caneta
        public function escrever($texto) {
            if ($this->carga > 0) {
                echo "Escrevendo: $texto\n";
                $this->carga--;
            } else {
                echo "A caneta está sem carga!\n";
            }       
        }

        public function recarregar($quantidade) {
            $this->carga += $quantidade;
            echo "A caneta foi recarregada. Carga atual: $this->carga\n";
        }

        public function trocarCor($novaCor) {
            $this->cor = $novaCor;
            echo "A cor da caneta foi alterada para: $this->cor\n";
        }
    }
    // Instanciando a classe Caneta
    $caneta = new Caneta();

    // Definindo propriedades da caneta
    $caneta->cor = "Azul" . "<br>";
    $caneta->marca = "BIC" . "<br>";
    $caneta->ponta = 0.7 . "<br>";  
    $caneta->tamanho = 14 . "<br>"; 
   
    // Exibindo os atributos da caneta
    echo "Cor: $caneta->cor" . "<br>";
    echo "Marca: $caneta->marca" . "<br>";
    echo "Ponta: $caneta->ponta" . "<br>";
    echo "Tamanho: $caneta->tamanho" . "<br>";
    echo "<br>";
    // Definindo a carga inicial da caneta
    $caneta->carga = 10;

    // Exibindo os métodos da caneta    
    echo "Métodos da caneta:" . "<br>";
    echo "1. Escrever" . "<br>";
    echo "2. Recarregar" . "<br>";
    echo "3. Trocar cor" . "<br>";
    echo "<br>";
