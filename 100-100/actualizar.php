<?php
echo $Sucursal = 	!empty  	($_POST['c0'])? $_POST['c0'] : '';
echo $nombres = 	!empty		($_POST['c1'])? $_POST['c1'] : '';
echo $apm = 		!empty		($_POST['c2'])? $_POST['c2'] : '';
echo $direccion = 	!empty 		($_POST['c3'])? $_POST['c3']: '';
echo $tel = 		!empty     	($_POST['c4'])? $_POST['c4'] : '';
$nlinea = 			!empty 		($_POST['nlinea']) ? $_POST['nlinea'] : '';
if($Sucursal&&$nombres&&$apm&&$direccion&&$tel){
	include('conexion.php');
	$registro = "UPDATE `cliente` SET `IDcliente`='',`idsucursal`='$Sucursal',`nombre`='$nombres',`apellido`='$apm',`direccion`='$direccion',`telefono`='$tel' WHERE IDcliente='$nlinea'";
	$resultado = mysqli_query($conexion,$registro);

}
header('Location: lista.php');