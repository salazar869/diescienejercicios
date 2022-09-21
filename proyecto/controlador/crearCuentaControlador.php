<?php
$nombre_usuario = !empty($_POST['c1']) ? $_POST['c1'] : '';
$email = !empty($_POST['c2']) ? $_POST['c2'] : '';
$telefono = !empty($_POST['c3']) ? $_POST['c3'] : '';
$password = !empty($_POST['c4']) ? $_POST['c4'] : '';

$foto = $_FILES["foto"]["name"];
$archivo = $_FILES["foto"]["tmp_name"];
$destino = "../img/" . $foto;
$move = move_uploaded_file($archivo, $destino);

if (!$move) {
    $codigo = $_FILES['foto']['error'];
    echo 'codigo error: ' . $codigo;
    echo 'la imagen  no pudo ser movida';
}
    

if($nombre_usuario&&$email&&$telefono&&$password&&$destino){
    $pass = md5($password);
    include('conexion.php');
    $consulta=<<<FIN
    insert into usuarios
    (user,email,telefono,password,foto)
    values
    ('$nombre_usuario','$email','$telefono','$pass','$destino')
FIN;
    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
    }
}
    header('Location: ../index.php');
?>