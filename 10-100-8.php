<!DOCTYPE html>
<html>
<head>
	<title>calcular el area de un cuadrado en cm</title>
</head>
<body>
	<form action="10-100-8.php" method='post'>

            <label for="i0">lado a</label>
            <input type="text" id="i0" name="c0">
            <br>
            <input type="submit" value="calcular">
            <br>
    </form>
    <?php 
	
		$a = !empty  ($_POST['c0'])? $_POST['c0'] : '';
        $calcular = $a*$a;
        echo "el area calculada es de: ".$calcular;
	?>
</body>
</html>