<?php
    $servidor='localhost';
    $usuario='root';
    $contrasenia='';
    $basededatos='colegio';

    $sqli=new mysqli($servidor,$usuario,$contrasenia,$basededatos);
        
    $consulta = 'SELECT COUNT(*) FROM Alumnos where apellido="Martinez"'; //Sino no pongo ningun as me sale que el nombre del arrayAsociativo es COUNT(*)
    $resultado = $sqli->query($consulta);                                 //Si le pongo un as cogera el nombre del as
 
    $fila = $resultado->fetch_assoc();
    foreach ($fila as $indice => $valor) {
       echo "$indice: $valor<br>";
    }    
  
    $sqli->close();
?>