<?php
require_once __DIR__ . '/../models/categoria.php';

class CategoriasController{
    public function index(){
        $modelcategoria = new categoria();
        $categorias = $modelcategoria->getAll();
        require_once __DIR__ . '/../views/categorias/index4.php';
    }
}
