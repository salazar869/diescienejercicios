<?php
echo $origen = 		!empty  	($_POST['c0'])? $_POST['c0'] : '';
echo $destino = 	!empty		($_POST['c1'])? $_POST['c1'] : '';
echo $fechahora = 	!empty 		($_POST['c2'])? $_POST['c2'] : '';
echo $normal = 		!empty 		($_POST['c3'])? $_POST['c3']: '';
echo $VIP = 		!empty    	($_POST['c4'])? $_POST['c4'] : '';
$nlinea = 			!empty 		($_POST['nlinea']) ? $_POST['nlinea'] : '';
if($origen&&$destino&&$fechahora&&$normal&&$VIP){
	include('conexion.php');
	$registro = "UPDATE `vuelos` SET `IDvuelos`='',`origen`='$origen',`destino`='$destino',`fechaHora`='$fechahora',`asientosNormales`='$normal',`asientosVIP`='$VIP' WHERE IDvuelos='$nlinea'";
	$resultado = mysqli_query($conexion,$registro);

}
header('Location: listavuelos.php');