<?php

echo $Sucursal = !empty  ($_POST['c0'])? $_POST['c0'] : '';
echo $nombres = !empty	($_POST['c1'])? $_POST['c1'] : '';
echo $apm = !empty		($_POST['c2'])? $_POST['c2'] : '';
echo $direccion = ! empty($_POST['c3'])? $_POST['c3']: '';
echo $tel = ! empty     ($_POST['c4'])? $_POST['c4'] : '';



	if($Sucursal&&$nombres&&$apm&&$direccion&&$tel){
    include('conexion.php');
    $consulta="INSERT INTO `cliente`(`IDcliente`, `idsucursal`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES ('','$Sucursal','$nombres','$apm','$direccion','$tel')";

    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
       
    }
}
header('Location: lista.php');




//COPIA DE SEGURIDAD
/*<?php

echo $Sucursal = !empty  ($_POST['c0'])? $_POST['c0'] : '';
echo $nombres = !empty  ($_POST['c1'])? $_POST['c1'] : '';
echo $apm = !empty      ($_POST['c2'])? $_POST['c2'] : '';
echo $direccion = ! empty($_POST['c3'])? $_POST['c3']: '';
echo $tel = ! empty     ($_POST['c4'])? $_POST['c4'] : '';



    if($Sucursal&&$nombres&&$apm&&$direccion&&$tel){
    include('conexion.php');
    $consulta="INSERT INTO `cliente`(`IDcliente`, `idsucursal`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES ('','$Sucursal','$nombres','$apm','$direccion','$tel')";

    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
       
    }
}
header('Location: lista.php');*/