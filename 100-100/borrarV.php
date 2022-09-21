<?php
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
if($id){
    include('conexion.php');
    $consulta = "DELETE FROM `vuelos` WHERE IDvuelos =$id";
    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo eliminar el registro');
    }
}
header('Location: listavuelos.php');