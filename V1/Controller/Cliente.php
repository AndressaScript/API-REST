<?php

require '../Model/Model_Cliente.php';
require'/V1/DAO/Cliente/getCliente.php';
    $req = $_SERVER['REQUEST_METHOD'];
    //var_dump($req);
    echo $req;

    


switch ($req) {
    case 'GET':
        $cliente = getClientes();
        $resp_json = json_encode($cliente);
        echo $resp_json;
        break;
       
       
    case 'POST':
         # code...
         break;

    
    case 'PUT':
        # code...
        break;


    case 'PATCH':
        # code...
         break;


    case 'DELETE':
         # code...
        break;


    default:
        # code...
        break;
}

?>