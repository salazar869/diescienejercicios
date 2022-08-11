<!DOCTYPE html>
<html>
<head>
	<title>enviar informacion</title>
</head>
<body>
	<form action="10-100-6.php" method='post'>

            <label for="i0">cual es tu nombre</label>
            <input type="text" id="i0" name="c0">
            <br>
            <input type="submit" value="enviar">
            <br>
    </form>
    <?php 
	
		echo $nombre = !empty  ($_POST['c0'])? $_POST['c0'] : '';
	?>
</body>
</html>

  


