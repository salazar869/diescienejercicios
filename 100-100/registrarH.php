<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar hoteles</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Registrar Hoteles</div>
        <div class="contenido">
            <form action="registraH.php" method='post'>

            <label for="i0">nombre</label>
            <input type="text" id="i0" name="c0">
            <br>
            <label for="i1">direccion</label>
            <input type="text" id="i1" name="c1">
            <br>
            <label for="i2">ciudad</label>
            <input type="text" id="i2" name="c2">
            <br>
            
            <label for="i3">telefono</label>
            <input type="text" id="i3" name="c3">
            <br>
            <label for="i4">Habitaciones Normales</label>
            <input type="text" id="i4" name="c4">
            <br><br><br>
            <label for="i5">Habitaciones VIP</label>
            <input type="text" id="i5" name="c5">
            <br>
            <input type="submit" value="registrar">
            </form>

        </div>
    </div>
</body>
</html>