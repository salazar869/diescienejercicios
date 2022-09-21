<?php  
    class loguinModelo {

        function consultarUsuario($user,$password){
             include'../controlador/conexion.php';            
            $pass = md5($password);
            $consulta = "SELECT * FROM `usuarios` WHERE user='$user' AND password = '$pass'";
            $query = mysqli_query($conexion,$consulta);
            return $query;

        }
    }