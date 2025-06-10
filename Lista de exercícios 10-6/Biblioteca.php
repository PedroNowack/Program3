<?php

declare(strict_types=1);

require_once 'Livro.php'; 

class Biblioteca {
    private string $nome;
    private string $endereco;
    private array $acervo = []; 

    public function __construct(string $nome, string $endereco) {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }


    public function getNome(): string {
        return $this->nome;
    }

    public function getEndereco(): string {
        return $this->endereco;
    }

   
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setEndereco(string $endereco): void {
        $this->endereco = $endereco;
    }

    
    public function adicionarLivro(Livro $livro): void {
        $this->acervo[] = $livro;
        echo "Livro '" . $livro->getTitulo() . "' adicionado ao acervo." . PHP_EOL;
    }

    public function removerLivro(Livro $livro): void {
        $key = array_search($livro, $this->acervo, true); 

        if ($key !== false) {
            unset($this->acervo[$key]);
    
            $this->acervo = array_values($this->acervo);
            echo "Livro '" . $livro->getTitulo() . "' removido do acervo." . PHP_EOL;
        } else {
            echo "Livro '" . $livro->getTitulo() . "' não encontrado no acervo." . PHP_EOL;
        }
    }

    public function listarLivros(): void {
        if (empty($this->acervo)) {
            echo "O acervo está vazio." . PHP_EOL;
            return;
        }

        echo "Livros no acervo:" . PHP_EOL;
        foreach ($this->acervo as $livro) {
            $livro->exibirInformacoes();
            echo PHP_EOL;
        }
    }


    public function buscarLivroPorTitulo(string $titulo): ?Livro {
        foreach ($this->acervo as $livro) {
            if ($livro->getTitulo() === $titulo) {
                return $livro;
            }
        }
        return null;
    }


    public function buscarLivrosPorAutor(string $autor): array {
        $livrosDoAutor = [];
        foreach ($this->acervo as $livro) {
            if ($livro->getAutor() === $autor) {
                $livrosDoAutor[] = $livro;
            }
        }
        return $livrosDoAutor;
    }
}
