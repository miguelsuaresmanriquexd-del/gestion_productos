<?php

require_once __DIR__ . '/../app/controller/ProductoController.php';

$controller = new ProductoController();
$controller->index();


require_once __DIR__ . '/../app/controller/clienteController.php';

$controller = new clienteController();
$controller->index();