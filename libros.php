<?php
    require_once("./php/head.php");
    require_once("./php/db.php");
    require_once("./php/getLibros.php");

    $database = new db();
    $db = $database->getConnection();

// Crear una instancia de Libro y obtener los Libros
    $libro = new Libro($db);
    $stament = $libro->getLibros();
?>
   
   <header class="mashead">
    <div class="container">
    <div class="mashead-heading text-uppercase">Conoce todos nuestros libros!</div>    
                <div class="mashead-subheading">Haz clic aqui:</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="/Proyecto_biblioteca/index.php">Ir Atras</a>
                <a class="btn btn-primary btn-xl text-uppercase" href="/Proyecto_biblioteca/autores.php">Ver Autores</a>
    </div>
   </header>

   <h1 class="text-center mt-5">Libros:</h1>

   <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $stament->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id_titulo']) . "</td>";
                echo "<td>" . htmlspecialchars($row['titulo']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tipo']) . "</td>";
                echo "</tr>";
               
            }
            ?>
        </tbody>
    </table>
 

<?php
    require_once("./php/footer.php");
?>
