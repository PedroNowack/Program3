<?php
abstract class Veiculo {
    protected $modelo;
    protected $ano;
    public function __construct($modelo, $ano) {
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    abstract public function mover();
}
class Carro extends Veiculo {
    public function mover() {
        echo "O carro {$this->modelo} de {$this->ano} está acelerando.\n";
    }
}
class Bicicleta extends Veiculo {
    public function mover() {
        echo "A bicicleta {$this->modelo} de {$this->ano} está pedalando.\n";
    }
}
$carro = new Carro("Fusca", 1975);
$carro->mover();
$bicicleta = new Bicicleta("Caloi", 2020);
$bicicleta->mover();
?>