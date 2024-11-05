<?php
    $servidor='localhost';
    $usuario='root';
    $contrasenia='';
    $basededatos='colegio';

    $sqli=new mysqli($servidor,$usuario,$contrasenia,$basededatos);
    //Para desactivar los errores:por procedimiento
    $controlador=new mysqli_driver();
    $controlador->report_mode=MYSQLI_REPORT_OFF;

    $id=$_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaNacimiento = $_POST['fechaNacimiento'];   
    $consulta = "INSERT INTO Alumnos (idAlumno,nombre, apellido, fechaNacimiento) VALUES ('$id','$nombre', '$apellido', '$fechaNacimiento')";

    $resultado = $sqli->query($consulta);
    $errorCode = $sqli->errno;
    
    if($resultado) {
        echo "Nuevo alumno insertado con éxito.";
    } else {
        echo "Error: " . $sqli->error;
    }
     header("Location:formulario.php?controlador=$errorCode");
    
    $sqli->close();
?>