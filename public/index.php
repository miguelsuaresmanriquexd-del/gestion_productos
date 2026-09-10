<?php

require_once __DIR__ . '/../app/controller/ProductoController.php';

$controller = new ProductoController();
$controller->index();


require_once __DIR__ . '/../app/controller/clienteController.php';

$controller = new clienteController();
$controller->index();

require_once __DIR__ . '/../app/controller/proveedoresController.php';

$controller = new proveedoresController();
$controller->index();

require_once __DIR__ . '/../app/controller/categoriasController.php';

$controller = new CategoriasController();
$controller->index();