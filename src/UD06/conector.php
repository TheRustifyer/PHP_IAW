<?php
	//Creo el conector una vez creada la BBDD
	include 'constants.php';
	
	$conector = mysqli_connect(HOST, USER, PASSWORD, NOMBRE_BBDD) or die("Coud not open a connection");
	$estado_de_la_conexion = "";

	if (!$conector) {
		$estado_de_la_conexion = "Conector no disponible";
	} else {
		$estado_de_la_conexion = "Conexión creada correctamente.";

	}

?>
