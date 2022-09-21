<?php
echo $nombre =     !empty     ($_POST['c0'])? $_POST['c0'] : '';
echo $direccion =  !empty	  ($_POST['c1'])? $_POST['c1'] : '';
echo $ciudad =     !empty	  ($_POST['c2'])? $_POST['c2'] : '';
echo $telefono =   !empty     ($_POST['c3'])? $_POST['c3']: '';
echo $Normales =   !empty     ($_POST['c4'])? $_POST['c4'] : '';
echo $VIP =        !empty     ($_POST['c5'])? $_POST['c5'] : '';
$nlinea = 			!empty 		($_POST['nlinea']) ? $_POST['nlinea'] : '';
if($nombre&&$direccion&&$ciudad&&$telefono&&$Normales&&$VIP){
	include('conexion.php');
	$registro = "UPDATE `hotel` SET `IDhotel`='',`nombre`='$nombre',`direccion`='$direccion',`ciudad`='$ciudad',`telefono`='$telefono',`HabitacionesNormales`='$Normales',`HabitacionesVIP`='$VIP' WHERE IDhotel='$nlinea'";
	$resultado = mysqli_query($conexion,$registro);

}
header('Location: listaHoteles.php');