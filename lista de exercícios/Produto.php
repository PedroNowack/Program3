<?php
class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirInformacoes() {
        echo "Nome: $this->nome, Preço: $this->preco, Quantidade: $this->quantidade\n";
    }
}
?>