 <?php
    session_start();
    include('conexion.php');
    if(isset($_POST['enviar'])) { // comprobamos que se hayan enviado los datos del formulario
        // comprobamos que los campos email y password no estén vacíos
        if(empty($_POST['email']) || empty($_POST['password'])) {
            echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>";
        }else {
            // "limpiamos" los campos del formulario de posibles códigos maliciosos
            $email = mysqli_real_escape_string($conexion,$_POST['email']);
            $password = mysqli_real_escape_string($conexion,$_POST['password']);
            $password = md5($password);
            // comprobamos que los datos ingresados en el formulario coincidan con los de la BD
            $sql = mysqli_query($conexion,"SELECT email, password FROM usuarios WHERE email='".$email."' AND password='".$password."'");
            if($row = mysqli_fetch_array($sql)) {
                $_SESSION['id_usuario'] = $row['id_usuario']; // creamos la sesion "id_usuario" y le asignamos como valor el campo id_usuario
                $_SESSION['$nombre_usuario'] = $row["$nombre_usuario"]; // creamos la sesion "usuario_nombre" y le asignamos como valor el campo usuario_nombre
                header("location: ../index.php");
                
            }else {
?>
Error, <a href="../vista/loguin.php">Reintentar</a>
<?php
            }
        }
    }else {
        header("Location: acceso.php");
    }
?> 
                
