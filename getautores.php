<?php
require_once ("./php/db.php");

class Autor {
    private $conn;
    private $table_name = "autores";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAutores() {
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
$autor = new Autor($db);
$stament = $autor->getAutores();
?>
