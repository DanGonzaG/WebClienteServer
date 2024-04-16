<?php
/*$server = "localhost";
$username = "root";
$password = "";
$database = "libreria";
$conn = new mysqli($server,$username,$password,$database);
if ($conn->connect_error){
    die("Conexion Fallida ".$conn->connect_error);
}*/
include("config.php");
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="navbar">
        <div class="navbar-left">
            <img src="img/Logo.jpg" alt="Logo" />
            <span>EDILIT</span>
        </div>
        <div class="navbar-right">
            <a href="Inicio.html">Inicio</a>
            <a href="conozcanos.html">Conozcámonos</a>
            <a href="catalogo.php">Catálogo</a>
            <a href="registro.html">Registro</a>
            <a href="contacto.html">Contacto</a>
        </div>
    </div>
</header>

<div class="main-section">
    <div class="catalog-up">
        <h1>Libros Listos Para Entrega</h1>
        <p>Un texto</p>
    </div>
    <table>
        <tr>
            <?php
            $query = "SELECT * FROM libro WHERE activo = 1";
            $result = $conn->query($query);

            while ($row = $result->fetch_assoc()){
                echo "<td>
                <div class='book-container'>
                    <a href='librodetalle.php?id=".$row['ISBN']."'>
                        <img src='".$row['ruta_imagen']."'><br>
                        ".$row['titulo']."<br>
                        ".$row['autor']."<br>
                        ₡".$row['precio']."<br>
                    </a>
                    <button href='#'>Añadir al carrito</button>
                </div>
            </td>";
            }
            ?>
        </tr>
    </table>
</div>
</body>
</html>