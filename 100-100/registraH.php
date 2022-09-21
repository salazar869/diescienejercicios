<?php

echo $nombre =     !empty     ($_POST['c0'])? $_POST['c0'] : '';
echo $direccion =  !empty	  ($_POST['c1'])? $_POST['c1'] : '';
echo $ciudad =     !empty	  ($_POST['c2'])? $_POST['c2'] : '';
echo $telefono =   !empty     ($_POST['c3'])? $_POST['c3']: '';
echo $Normales =   !empty     ($_POST['c4'])? $_POST['c4'] : '';
echo $VIP =        !empty     ($_POST['c5'])? $_POST['c5'] : '';



	if($nombre&&$direccion&&$ciudad&&$telefono&&$Normales&&$VIP){
    include('conexion.php');
    $consulta="INSERT INTO `hotel`(`IDhotel`, `nombre`, `direccion`, `ciudad`, `telefono`, `HabitacionesNormales`, `HabitacionesVIP`) VALUES ('','$nombre','$direccion','$ciudad','$telefono','$Normales','$VIP')";

    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
       
    }
}
header('Location: listaHoteles.php');