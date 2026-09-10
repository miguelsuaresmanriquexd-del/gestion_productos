<?php
require_once __DIR__ . '/../models/producto.php';

class ProductoController
{
    public function index()
    {
        $modelproducto = new producto();


        $productos = $modelproducto->getALL();


        $producto_unico = $modelproducto->getById(5);

        require_once __DIR__ . '/../views/productos/index.php';
    }
}
