<?php
    	include 'constants.php';
	include 'conector.php';
	
	echo "Soy el script para insertar alumnos."."<br/>";
	echo "Estado de la conexión -> " . $estado_de_la_conexion . "<br/>";

	// Creo la tabla en BBDD si es la primera vez que se lanza el script
    	$tabla_alumnnos = "CREATE TABLE IF NOT EXISTS alumnos (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		codalumno INT(10) not null,
		nombre VARCHAR(30) not null,
		direccion VARCHAR(45) not null,
		
		)";
		
		if ($result = mysqli_query($conector, $tabla_alumnos)) {
		    echo "Tabla creada correctamente."."<br/>";
		    mysqli_free_result($result);
  		    
		} else {
		    echo "No ha sido posible crear la tabla: ". mysqli_error($conector);
		}
	    // Compruebo la BBDD a la que estoy actualmente conectado
	    if ($result = mysqli_query($conector, "SELECT DATABASE()")) {
	        $row = mysqli_fetch_row($result);
	        echo "Estoy conectado a la BBDD: " . $row[0] . "<br/>";
	        mysqli_free_result($result);
	    }

    
?>


