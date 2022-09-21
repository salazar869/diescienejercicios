<?php
@session_start();
if (isset($_SESSION["usuario"])) {
    $usuario=$_SESSION["usuario"];
}

$nombre_evento = !empty($_POST['c1']) ? $_POST['c1'] : '';
$descripcion_evento = !empty($_POST['c2']) ? $_POST['c2'] : '';
$fecha = !empty($_POST['c3']) ? $_POST['c3'] : '';

$foto = $_FILES["foto"]["name"];
$archivo = $_FILES["foto"]["tmp_name"];
$destino = "../img/" . $foto;
$move = move_uploaded_file($archivo, $destino);

if (!$move) {
    $codigo = $_FILES['foto']['error'];
    echo 'codigo error: ' . $codigo;
    echo 'la imagen  no pudo ser movida';
} 

if ($nombre_evento && $descripcion_evento && $fecha && $destino) {
    include('conexion.php');    

    
    $consulta = <<<FIN
    insert into eventos
    (nombreEvento,descripcionEvento,fecha,foto,id_usuario)
    values
    ('$nombre_evento','$descripcion_evento','$fecha','$destino','$usuario')
FIN;
    if (!mysqli_query($conexion, $consulta)) {
        die('No se pudo agregar el registro');
       
    }
}
header("Location: ../seguridad/vista2.php");

