<?php
    //
    $servidor='localhost';
    $usuario='root';
    $contrasenia='';
    $basededatos='colegio';

    $sqli=new mysqli($servidor,$usuario,$contrasenia,$basededatos);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $consulta = "INSERT INTO Alumnos (nombre, apellido, fechaNacimiento) VALUES ('$nombre', '$apellido', '$fechaNacimiento')";

    $resultado = $sqli->query($consulta);

    if($resultado) {
        echo "Nuevo alumno insertado con éxito.";
    } else {
        echo "Error: " . $sqli->error;
    }
    $sqli->close();
?>