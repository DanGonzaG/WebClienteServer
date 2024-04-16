<?php
include ("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">

</head>
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

<body>
    <section>
        <div class="adminMenu">
            <div class="navbar-right" style="background-color: rgba(243, 153, 50, 0.521);">
                <ol style="list-style: none;">
                    <li style="padding: 20px;"><a href="listaLibro.php">Lista libros</a></li>
                    <li style="padding: 20px;"><a href="listaCategoria.php">Lista Categorias</a></li>
                    <li style="padding: 20px;"><a href="listaEditorial.php">Lista Editoriales</a></li>
                </ol>
            </div>

            <div>
                <table>
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Sitio Web</td>
                        <td>Telefono</td>
                        <td>Acciones</td>
                    </tr>
                    <tr>
                        <td>*****</td>
                        <td>*****</td>
                        <td>*****</td>
                        <td>*****</td>
                    </tr>

                </table>


            </div>
        </div>
    </section>
</body>

</html>