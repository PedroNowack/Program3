<?php
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor <= 0) {
            throw new Exception("Valor de depósito deve ser positivo");
        }
        $this->saldo += $valor;
        return $this->saldo;
    }

    public function sacar($valor) {
        if ($valor <= 0) {
            throw new Exception("Valor de saque deve ser positivo");
        }
        if ($valor > $this->saldo) {
            throw new Exception("Saldo insuficiente");
        }
        $this->saldo -= $valor;
        return $this->saldo;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

try {
    $conta = new ContaBancaria("Maria Oliveira", 500);
    
    echo "Titular: " . $conta->getTitular() . "\n";
    echo "Saldo inicial: R$ " . number_format($conta->getSaldo(), 2) . "\n";
    
    $conta->depositar(200);
    echo "Depósito realizado. Novo saldo: R$ " . number_format($conta->getSaldo(), 2) . "\n";
    
    $conta->sacar(100);
    echo "Saque realizado. Novo saldo: R$ " . number_format($conta->getSaldo(), 2) . "\n";
    

} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
