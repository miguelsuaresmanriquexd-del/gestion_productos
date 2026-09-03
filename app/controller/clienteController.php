<?php
require_once __DIR__ . '/../models/cliente.php';

class ClienteController{
    public function index(){
        $modelcliente = new cliente();
        $clientes = $modelcliente->getALL();
        require_once __DIR__ . '/../views/clientes/index2.php';
    }
    
}