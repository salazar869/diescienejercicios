<?php
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
if($id){
    include('conexion.php');
    $consulta = "DELETE FROM `hotel` WHERE IDhotel =$id";
    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo eliminar el registro');
    }
}
header('Location: listaHoteles.php');