<?php
    $servidor='localhost';
    $usuario='root';
    $contrasenia='';
    $basededatos='colegio';

    $sqli=new mysqli($servidor,$usuario,$contrasenia,$basededatos);
        
    $consulta = 'DELETE FROM Alumnos WHERE idAlumno=10';
    $resultado = $sqli->query($consulta);
    //echo var_dump($resultado);
   
    if ($resultado) {
        echo "El registro fue eliminado con éxito.";
    } else {
        echo "Error al eliminar el registro: " . $sqli->error;
    }
    // Cerrar la conexión
    $sqli->close();
    ?>