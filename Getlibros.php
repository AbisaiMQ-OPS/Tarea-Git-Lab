<?php
require_once ("./php/db.php");

class Libro {
    private $conn;
    private $table_name = "titulos";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getLibros() {
        $query = "SELECT * FROM " . $this->table_name;
        $stament = $this->conn->prepare($query);
        $stament->execute();

        return $stament;
    }
}

// Crear una instancia de la base de datos y obtener la conexión
$database = new db();
$db = $database->getConnection();

// Crear una instancia de Autor y obtener los autores
$autor = new Libro($db);
$stament = $autor->getLibros();
?>
