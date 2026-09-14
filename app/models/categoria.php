<?php
require_once __DIR__ . '/../../config/database.php';

class Categoria{
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    // Este es el método principal que alimenta tu única tabla en la vista
    public function getById($id)
    {
        $sql = "SELECT 
                categoria.id_categoria,
                categoria.nombre, 
                categoria.descripcion, 
                categoria.nombre AS categoria
            FROM categoria
            WHERE categoria.id_categoria = $id";

        $consulta = $this->connection->query($sql);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
}
