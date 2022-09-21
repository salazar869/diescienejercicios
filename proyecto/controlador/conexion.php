<?php
    //Conexión a la base de datos php con el usuario  y contraseña 

    $conexion = mysqli_connect('localhost','id19539476_grupoa','yN{3aj|qQPay$ysh','id19539476_eventos');
        $tildes = $conexion->query("SET NAMES 'utf8'");
        if(mysqli_connect_error()){
        die('No se puede conectar a la base de datos'.mysqli_connect_error());
    }

?>



