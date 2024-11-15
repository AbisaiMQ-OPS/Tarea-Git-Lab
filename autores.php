<?php
    require_once("./php/head.php");
    require_once("./php/db.php");
    require_once("./php/getAutores.php");

    $database = new db();
    $db = $database->getConnection();

// Crear una instancia de Autor y obtener los autores
    $autor = new Autor($db);
    $stmt = $autor->getAutores();
?>
   
   <header class="mashead">
    <div class="container">
    <div class="mashead-heading text-uppercase">Conoce los Autores!</div>    
                <div class="mashead-subheading">Haz clic aqui:</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="/Proyecto_biblioteca/index.php">Ir Atras</a>
                <a class="btn btn-primary btn-xl text-uppercase" href="/Proyecto_biblioteca/libros.php">Ver libros</a>
    </div>
   </header>

    <h1 class="text-center mt-5">Autores:</h1>

   <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $stament->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id_autor']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($row['apellido']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
 


<?php
    require_once("./php/footer.php");
?>
