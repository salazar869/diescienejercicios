<?php include_once('conexver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body bgcolor="#b8bfff" >
<center>
<?php 
mysqli_query($con,"insert into $empleado(nombre, apellido,EPS,email,telefono,cargo,fechaN,alergia,direccion ) value ('$_REQUEST[nom]','$_REQUEST[ap]','$_REQUEST[EPS]','$_REQUEST[email]','$_REQUEST[tel]','$_REQUEST[cargo]','$_REQUEST[fechaN]','$_REQUEST[alergia]','$_REQUEST[direccion]')") or die ('error'.mysqli_error($con));
mysqli_close($con);
 ?>
	<h1>Inicio</h1><br><br>
    <a href="datos.php"><input type="submit" value="Datos"></a>
 	<a href="reportar.php"><input type="submit" value="Reportar"></a>
 	<br><br>
 	<a href="index.php"><input type="submit" value="salir"></a>
</center>
</body>
</html>