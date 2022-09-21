<?php
@session_start();
$user = filter_input(INPUT_POST, 'user');
$password = filter_input(INPUT_POST, 'password');


include_once "../modelo/loguin.modelo.php";
$loguinModelo = new loguinModelo();
$result = $loguinModelo->consultarUsuario($user, $password);
$encontro = false;
while ($fila = mysqli_fetch_array($result)) {

    if ($fila != NULL) {
        $encontro = true;
        $_SESSION['usuario'] = $fila['id'];
        $_SESSION['nombreUsuario'] = $fila['user'];
        $_SESSION['foto'] = $fila['foto'];
    }
}
if ($encontro = true) {

        header("Location: ../seguridad/vista2.php");
        
} else {
        header("Location: ../vista/loguin.php");
     
        

}