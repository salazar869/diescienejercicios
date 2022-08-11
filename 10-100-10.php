<!DOCTYPE html>
<html>
<head>
<title>calculadora simple</title>
</head>
<body>
	<form action="10-100-10.php" method="post">
		<select name="operador">
			<option value="suma">Suma</option>
			<option value="resta">Resta</option>
			<option value="multiplicacion">Multiplicaci&oacute;n</option>
			<option value="division">Divisi&oacute;n</option>
		</select><br />
		Ingresa tu primer numero:<br />
		<input type="text" name="c0"><br />
		Ingresa tu segundo numero:<br />
		<input type="text" name="C1"><br>
		<input type="submit" value="calcular">
	</form>
<?php 
	if ($_POST ["c0"] !="" and $_POST ["C1"]!=""){
		if ($_POST["operador"] == "suma") {
			echo ($resultado = $_POST ["c0"] + $_POST ["C1"]);
		} elseif ($_POST["operador"] == "resta") {
			echo ($resultado = $_POST ["c0"] - $_POST ["C1"]);
		} elseif ($_POST["operador"] == "multiplicacion") {
			echo ($resultado = $_POST ["c0"] * $_POST ["C1"]);
		} elseif ($_POST["operador"] == "division") {
			echo ($resultado = $_POST ["c0"] / $_POST ["C1"]);
		}
	} 
?>
</body>
</html>