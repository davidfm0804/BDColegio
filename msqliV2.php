<?php
    $servidor='localhost';
    $usuario='root';
    $contrasenia='';
    $basededatos='colegio';

    $sqli=new mysqli($servidor,$usuario,$contrasenia,$basededatos);
        
    $consulta = 'SELECT * FROM Alumnos';
    $resultado = $sqli->query($consulta);
    //echo var_dump($resultado);
    // Recorrer los resultados y mostrarlos
    while ($fila = $resultado->fetch_array()) {//fecth_array para cada campo me genera un array numerico y otro asociativo
        foreach ($fila as $indice => $valor) {//Fetch_assoc solo muestra los asociativos y el fetch_num solo muestra los numericos
            echo "$indice: $valor<br>";
        }    
        echo "<br/>";
    }
    // Cerrar la conexión
    $sqli->close();
    ?>