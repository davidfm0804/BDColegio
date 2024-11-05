<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioBD</title>
</head>
<body>
    <form action="recogerM.php" method="post">
        <input type="text" name="id" placeholder="Introduce id">
        <input type="text" name="nombre" placeholder="Introduce nombre">
        <input type="text" name="apellido" placeholder="Introduce apellido">
        <input type="date" name="fechaNacimiento">
        <input type="submit" value="Insertar">
        <?php
            if(!empty($_GET['controlador'])){
                echo "</br>Error al introducir datos clave repetida";
            }
        ?>
    </form>
</body>
</html>