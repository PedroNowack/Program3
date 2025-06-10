<?php

declare(strict_types=1);

class Leitor {
    private string $nome;
    private string $email;
    private string $telefone;

    public function __construct(string $nome, string $email, string $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getTelefone(): string {
        return $this->telefone;
    }

 
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setTelefone(string $telefone): void {
        $this->telefone = $telefone;
    }

    
    public function exibirLeitor(): void {
        echo "Nome: " . $this->nome . PHP_EOL;
        echo "Email: " . $this->email . PHP_EOL;
        echo "Telefone: " . $this->telefone . PHP_EOL;
    }
}
