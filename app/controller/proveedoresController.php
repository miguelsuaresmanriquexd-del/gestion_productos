<?php
require_once __DIR__ . '/../models/proveedores.php';

class ProveedoresController{
    public function index(){
        $modelproveedores = new proveedores();
        $proveedores = $modelproveedores->getALL();
        require_once __DIR__ . '/../views/proveedores/index3.php';
    }
    
}