<?php

echo $idcliente  =      !empty     ($_POST['c0'])? $_POST['c0'] : '';
echo $idsucursal  =     !empty	   ($_POST['c1'])? $_POST['c1'] : '';
echo $idHotel  =        !empty	   ($_POST['c2'])? $_POST['c2'] : '';
echo $idVuelo  =        !empty     ($_POST['c3'])? $_POST['c3'] : '';
echo $habitacio =       !empty     ($_POST['c4'])? $_POST['c4'] : '';
echo $Asiento =         !empty     ($_POST['c5'])? $_POST['c5'] : '';
echo $tiempo =          !empty     ($_POST['c6'])? $_POST['c6'] : '';


if($idcliente&&$idsucursal&&$idHotel&&$idVuelo&&$habitacio&&$Asiento&&$tiempo){
    include('conexion.php');
    $consulta="INSERT INTO `controlador`(`IDcontrolador`, `idcliente`, `idsucursal`, `idHotel`, `idVuelo`, `habitacio`, `Asiento`, `tiempo`) VALUES ('','$idcliente','$idsucursal','$idHotel','$idVuelo','$habitacio','$Asiento','$tiempo')";

    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
       
    }
}
header('Location: servicios.php');