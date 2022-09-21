<?php

$id = filter_input(INPUT_GET, 'id');
echo $id;
echo $nombre_evento;
include '../modelo/eventosModelo.php';
$eventosModelo = new eventosModelo();
$eventosModelo->eliminar($id);
header("Location: ../vista/misEventos.php");
