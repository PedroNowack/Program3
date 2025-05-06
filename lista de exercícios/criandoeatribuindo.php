<?php

include  'Produto.php'; 


$produto1 = new Produto();
$produto1->nome = "Caneta";
$produto1->preco = 2.5;
$produto1->quantidade = 10;

$produto2 = new Produto();
$produto2->nome = "Caderno";
$produto2->preco = 15.0;
$produto2->quantidade = 5;


$produto1->exibirInformacoes();
$produto2->exibirInformacoes();
?>