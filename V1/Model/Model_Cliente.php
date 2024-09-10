<?php
// Definição da classe Cliente
class Cliente {
    // Propriedades públicas da classe
    public $id;
    public $nome;
    public $cpf;
    public $endereco;

    // Construtor para inicializar a classe
    public function __construct($id, $nome, $cpf, $endereco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    // Método para exibir as informações do cliente
    public function exibirInformacoes() {
        return "ID: " . $this->id . "<br>Nome: " . $this->nome . "<br>CPF: " . $this->cpf . "<br>Endereço: " . $this->endereco . "<br><br>";
    }
}

// Criar um vetor para armazenar as instâncias da classe Cliente


// Iterar sobre o vetor e exibir as informações de cada cliente
foreach ($clientes as $cliente) {
    echo $cliente->exibirInformacoes();
}
?>
