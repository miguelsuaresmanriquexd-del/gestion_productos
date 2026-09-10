<?php
require_once __DIR__ . '/../../config/database.php';

class producto{
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT 
                producto.id,
                producto.nombre, 
                producto.precio, 
                categoria.nombre AS categoria, 
                proveedores.nombre AS proveedor 
            FROM producto 
            INNER JOIN proveedores ON producto.id_proveedor = proveedores.id
            INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT 
                producto.id,
                producto.nombre, 
                producto.precio, 
                categoria.nombre AS categoria, 
                proveedores.nombre AS proveedor 
            FROM producto 
            INNER JOIN proveedores ON producto.id_proveedor = proveedores.id
            INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria 
            WHERE producto.id = $id";

        $consulta = $this->connection->query($sql);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function getCategorias()
    {
        $sql = "SELECT id_categoria, nombre, descripcion FROM categoria";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
