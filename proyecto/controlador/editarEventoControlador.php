<?php
@session_start();
$id = filter_input(INPUT_POST, 'id');
$nombreEvento = filter_input(INPUT_POST, 'nombreEvento');
$descripcionEvento = filter_input(INPUT_POST, 'descripcionEvento');
$fechaEvento = filter_input(INPUT_POST, 'fecha ');
$foto = filter_input(INPUT_POST, 'foto ');

$foto = $_FILES["foto"]["name"];
$archivo = $_FILES["foto"]["tmp_name"];
$destino = "../img/" . $foto;
$move = move_uploaded_file($archivo, $destino);



include_once "../modelo/eventosModelo.php";
$eventosModelo = new eventosModelo();
$eventosModelo->modificar($nombreEvento, $descripcionEvento, $fechaEvento, $destino, $id);

header("Location: ../vista/misEventos.php");
?>

