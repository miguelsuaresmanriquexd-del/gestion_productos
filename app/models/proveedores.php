<?php
require_once __DIR__ . '/../../config/database.php';

class proveedores{
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getALL(){
        $sql ="SELECT * FROM proveedores";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}