<?php

require_once 'Livro.php';
require_once 'Leitor.php';
require_once 'Biblioteca.php';


$leitor1 = new Leitor("Nowack", "nowack@gmail.com", "55 99999-9999");
$leitor2 = new Leitor("Pedro", "pedro@gmail.com", "55 88888-8888");


$livro1 = new Livro("Harry Potter e a Pedra Filosofal", "J.K. Rowling", 1997);
$livro2 = new Livro("Harry Potter e a Câmara Secreta", "J.K. Rowling", 1998);
$livro3 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954);


$biblioteca = new Biblioteca("Biblioteca Municipal", "Rua Principal, 123");


$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

echo PHP_EOL . "--- Listando livros da biblioteca ---" . PHP_EOL;
$biblioteca->listarLivros();


echo PHP_EOL . "--- Buscando livros ---" . PHP_EOL;
$livroEncontrado = $biblioteca->buscarLivroPorTitulo("Harry Potter e a Câmara Secreta");
if ($livroEncontrado !== null) {
    echo "Livro encontrado por título:" . PHP_EOL;
    $livroEncontrado->exibirInformacoes();
} else {
    echo "Livro não encontrado." . PHP_EOL;
}

$livrosDaRowling = $biblioteca->buscarLivrosPorAutor("J.K. Rowling");
if (!empty($livrosDaRowling)) {
    echo "Livros encontrados por autor:" . PHP_EOL;
    foreach ($livrosDaRowling as $livro) {
        $livro->exibirInformacoes();
        echo PHP_EOL;
    }
} else {
    echo "Nenhum livro encontrado para este autor." . PHP_EOL;
}


echo PHP_EOL . "--- Empréstimos e Devoluções ---" . PHP_EOL;

echo $livro1->estaDisponivel();
$livro1->emprestar($leitor1);
echo $livro1->estaDisponivel();
echo "Quem pegou: " . ($livro1->quemPegou() ? $livro1->quemPegou()->getNome() : "Ninguém") . PHP_EOL;
$livro1->exibirInformacoes();


$livro1->emprestar($leitor2); 

$livro1->devolver();
echo $livro1->estaDisponivel();
echo "Quem pegou: " . ($livro1->quemPegou() ? $livro1->quemPegou()->getNome() : "Ninguém") . PHP_EOL;
$livro1->exibirInformacoes();


$livro1->devolver(); 



echo PHP_EOL . "--- Removendo livro da biblioteca ---" . PHP_EOL;
$biblioteca->removerLivro($livro2);
$biblioteca->listarLivros();
