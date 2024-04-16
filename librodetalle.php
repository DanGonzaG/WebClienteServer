<?php
/*$server = "localhost";
$username = "root";
$password = "";
$database = "libreria";
$conn = new mysqli($server,$username,$password,$database);
if ($conn->connect_error){
    die("Conexion Fallida ".$conn->connect_error);
}
$id = $_GET['id'];
$query = "SELECT * FROM libro WHERE ISBN = $id";
$result = $conn->query($query);
$libro = $result->fetch_assoc();*/

include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
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
    <div class="book-detail">
        <div class="book-info">
            <h3>Autor: <?php echo $libro['autor']; ?></h3>
            <h2><?php echo $libro['titulo']; ?></h2>
            <p><?php echo $libro['sinopsis']; ?></p>
            <button href="#">Añadir al carrito</button>
        </div>
        <div class="book-image">
            <img src="<?php echo $libro['ruta_imagen']; ?>" alt="<?php echo $libro['titulo']; ?>" class="big-image">
        </div>
    </div>
</div>
</body>
</html>