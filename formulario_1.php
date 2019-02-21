<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario 1</title>
</head>
<body>
    <?php
        $nombre =$_POST['nombre']??'';
        $codigo =$_POST['codigo']??'';
        $precio =$_POST['precio']??'';
    ?>
    <h1>Registro de Productos</h1>
    <form method="POST">
        <label>Nombre:</label>
		<input type="text" value="<?=$nombre?>" name="nombre" required>
		<br>
        <label >Codigo:</label>
        <input type="text" value="<?=$codigo?>" name="codigo" required>
        <br>
        <label>Precio:</label>
		<input type="text" value="<?=$precio?>" name="precio" required>
		<br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>