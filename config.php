<?php 

$server = "localhost";
$username = "root";
$password = "Sql1989,Dan";
$database = "libreria";

$conn = new mysqli($server,$username,$password,$database);
if($conn->connect_error){
    die("Conexion fallida ".$conn->connect_error);
}
?>