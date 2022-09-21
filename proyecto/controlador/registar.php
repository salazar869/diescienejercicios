<?php
$nombre_usuario = !empty($_POST['c1']) ? $_POST['c1'] : '';
$email = !empty($_POST['c2']) ? $_POST['c2'] : '';
$telefono = !empty($_POST['c3']) ? $_POST['c3'] : '';
$password = !empty($_POST['c4']) ? $_POST['c4'] : '';
$foto = !empty($_POST['c5']) ? $_POST['c5'] : '';
    $pass = md5('c4');

if($nombre_usuario&&$email&&$telefono&&$password){
    include('conexion.php');

    $consulta=<<<FIN
    insert into usuarios
    (nombre_usuario,email,telefono,password)
    values
    ('$nombre_usuario','$email','$telefono','$pass')
FIN;
    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
    }
}
header('Location: ../index.php');