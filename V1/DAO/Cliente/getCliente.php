<?php

require'../../Model/Model_Cliente.php';

function getClientes(){

    $clientes = [
        new Cliente(1, "Ana Souza", "123.456.789-00", "Avenida Central, 45"),
        new Cliente(2, "Carlos Pereira", "234.567.890-11", "Rua das Palmeiras, 789"),
        new Cliente(3, "Fernanda Lima", "345.678.901-22", "Praça da Bandeira, 101"),
        new Cliente(4, "João Silva", "456.789.012-33", "Rua dos Girassóis, 202"),
        new Cliente(5, "Mariana Costa", "567.890.123-44", "Avenida dos Eucaliptos, 303")
    ];

}


?>