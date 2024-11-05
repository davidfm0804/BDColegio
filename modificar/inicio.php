<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasenia = '';
    $basededatos = 'colegio';

    // Conectar a la base de datos
    $sqli = new mysqli($servidor, $usuario, $contrasenia, $basededatos);

    // Verificar la conexión
    if ($sqli->connect_error) {
        die("Error de conexión: " . $sqli->connect_error);
    }

    // Realizar la consulta
    $consulta = 'SELECT * FROM Alumnos';
    $resultado = $sqli->query($consulta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModificarInicio</title>
</head>
<body>
    <form action="modificar.php" method="post">
        <select name="alumno">
            <?php
                // Verificar si hay resultados
                if ($resultado->num_rows > 0) {
                    // Recorrer los resultados y crear una opción para cada alumno
                    while ($fila = $resultado->fetch_assoc()) {
                        echo '<option name="alumno">'.$fila['nombre'].' '.$fila['apellido'].'</option>';
                    }
                }
            ?>
        </select>
        <input type="submit" value="Modificar">
    </form>
</body>
</html>
