<?php
    	include 'constants.php';
	
	$conector = mysqli_connect(HOST, USER, PASSWORD, NOMBRE_BBDD) or die("Coud not open a connection");

    echo "Soy el script para insertar alumnos."."<br/>";

	if (!$conector) {
		die("Conector no disponible" . mysqli_connect_error());
	} else {
		echo "El conector funciona correctamente"."<br/>";
	}

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

	mysqli_close($conector);
    
?>


