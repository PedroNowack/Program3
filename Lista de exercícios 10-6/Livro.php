<?php

declare(strict_types=1);

require_once 'Leitor.php'; 

class Livro {
    private string $titulo;
    private string $autor;
    private int $anoPublicacao;
    private bool $disponivel;
    protected ?Leitor $leitorAtual = null; 

    public function __construct(string $titulo, string $autor, int $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = true;
    }


    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function getAnoPublicacao(): int {
        return $this->anoPublicacao;
    }

    public function isDisponivel(): bool {
        return $this->disponivel;
    }

  
    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor(string $autor): void {
        $this->autor = $autor;
    }

    public function setAnoPublicacao(int $anoPublicacao): void {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function setDisponivel(bool $disponivel): void {
        $this->disponivel = $disponivel;
    }


    public function exibirInformacoes(): void {
        echo "Título: " . $this->titulo . PHP_EOL;
        echo "Autor: " . $this->autor . PHP_EOL;
        echo "Ano de Publicação: " . $this->anoPublicacao . PHP_EOL;
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . PHP_EOL;
        if ($this->leitorAtual !== null) {
            echo "Emprestado para: " . $this->leitorAtual->getNome() . " (" . $this->leitorAtual->getEmail() . ")" . PHP_EOL;
        }
    }

    
    public function emprestar(Leitor $leitor): void {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $leitor;
            echo "Livro '" . $this->titulo . "' emprestado para " . $leitor->getNome() . " com sucesso." . PHP_EOL;
        } else {
            echo "Livro '" . $this->titulo . "' já está emprestado." . PHP_EOL;
        }
    }

    public function devolver(): void {
        $this->disponivel = true;
        $this->leitorAtual = null;
        echo "Livro '" . $this->titulo . "' devolvido com sucesso." . PHP_EOL;
    }

    public function estaDisponivel(): string {
        return "Livro '" . $this->titulo . "' está " . ($this->disponivel ? "disponível" : "emprestado") . " para empréstimo." . PHP_EOL;
    }

    public function quemPegou(): ?Leitor {
        return $this->leitorAtual;
    }
}
