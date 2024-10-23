<?php
    $servidor='localhost';
    $usuario='root';
    $contrasenia='';
    $basededatos='colegio';

    $sqli=new mysqli($servidor,$usuario,$contrasenia,$basededatos);
    
    $consulta = 'SELECT * FROM Alumnos';
    $resultado = $sqli->query($consulta);
   // Recorrer los resultados y mostrarlos
    while ($fila = $resultado->fetch_assoc()) {
        echo "  : " . $fila['idAlumno'] . " - Nombre: " . $fila['nombre'] . " - Apellido: " . $fila['apellido'] . " - Fecha de Nacimiento: " . $fila['fechaNacimiento'] . "<br>";
    }
    // Cerrar la conexión
    $sqli->close();
?>