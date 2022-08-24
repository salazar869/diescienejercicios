<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body bgcolor="#b8bfff" >
	<center>
	<form method="POST" action="Inicio.php">
		<h1>Registro</h1>
		nombre: <input type="text" name="nom" placeholder="nombre">
		<br><br>
		apellido: <input type="text" name="ap" placeholder="apellido">
		<br><br>
		EPS: <input type="text" name="EPS" placeholder="EPS">
		<br><br>
		correo: <input type="email" name="email" placeholder="ejemplo@dominio.com">
		<br><br>
		telefono: <input type="int" name="tel" placeholder="telefono">
		<br><br>
		cargo: <input type="text" name="cargo" placeholder="cargo">
		<br><br>
		fecha de nacimiento: <input type="date" name="fechaN" placeholder="fecha de nacimiento">
		<br><br>
		alergia: <input type="text" name="alergia" placeholder="alergia">
		<br><br>
		direccion: <input type="text" name="direccion" placeholder="direccion">	
		<br><br>
		<input type="submit" value="Ingresar">
		<p><a href="index.php">Ya tengo una cuenta</a></p>
	</form>	
	</center>
</body>
</html>