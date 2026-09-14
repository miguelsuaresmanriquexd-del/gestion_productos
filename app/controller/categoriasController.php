<?php
require_once __DIR__ . '/../models/categoria.php';

class CategoriaController
{
    public function index()
    {
        $modelcategoria = new categoria();

       
        $categoria_unico = $modelcategoria->getById(5);

        
        require_once __DIR__ . '/../views/categorias/index4.php';
    }
}

