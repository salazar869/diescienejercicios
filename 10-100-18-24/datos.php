<?php include_once('conexver.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body bgcolor="#b8bfff" >
<h4>
	DATOS
	<?php 
	 while ( $userVer = mysqli_fetch_array($veruser)) {
		?><h3><?php 	 echo $userVer['userid']. ' '; ?></h3>
	<?php 
		 echo $userVer['nombre']. ' ';
		 echo $userVer['apellido']. ' ';
		 echo $userVer['EPS']. ' ';
		 echo $userVer['email']. ' ';
		 echo $userVer['telefono']. ' ';
		 echo $userVer['cargo']. ' ';
		 echo $userVer['fechaN']. ' ';
		 echo $userVer['alergia']. ' ';
		 echo $userVer['direccion']. ' ';

		 echo "<br>";}

	 ?>
</h4>
</body>
</html>