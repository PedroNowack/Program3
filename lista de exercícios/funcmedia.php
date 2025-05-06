<?php
include 'criandoeatribuindo.php';
function mostrarMediaPrecos($produto1, $produto2) {
    $media = ($produto1->preco + $produto2->preco) / 2;
    echo "A média dos preços dos produtos é: $media\n";
}


mostrarMediaPrecos($produto1, $produto2);
?>