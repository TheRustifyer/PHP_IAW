<?php
    	include 'constants.php';
	
	$conector = mysqli_connect(HOST, USER, PASSWORD, NOMBRE_BBDD) or die("Coud not open a connection");

    echo "Soy el script para insertar alumnos."."<br/>";

    if ($conector){
	echo "Conector listo";
	mysqli_select_db($conector, "iaw");
    	$tabla_alumnnos = "CREATE TABLE alumnos(
		codalumno int(10) PRIMARY KEY not null,
		nombre varchar(30) not null,
		direccion varchar(45) not null,
		curso int(10) not null)";
    	$mysqli_query($conector, $tabla_alumnos);
	$mysqli_close($conector);
    } else {
	echo "Algo ha fallado";
    }
    
?>
