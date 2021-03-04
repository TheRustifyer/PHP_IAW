<html>
    <head>
        <title>Creación BBDD</title>
    </head>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Soy el script que crea la BBDD</h1>
	<?php
	    include 'constants.php';
	    
	    //Query para crear la BBDD
	    $createDatabase = "CREATE DATABASE ".NOMBRE_BBDD;

	    //Creo el enlace con la BBDD
	    $conector = mysqli_connect(HOST, USER, PASSWORD) or die("Coud not open a connection");

	/*Compruebo el estado de la conexión, una vez más y ejecuto:
	las sentencias necesarias para la creación de la BBDD.
	Modifico el nivel de identación por comodidad al escribir en la MV.	
	*/
	if (!mysqli_connect_errno() && $conector) {
	    echo "Conexión creada correctamente."."<br/>";
	    mysqli_query($conector, $createDatabase);
	    mysqli_select_db($conector, NOMBRE_BBDD);

	// Compruebo la BBDD a la que estoy actualmente conectado
	if ($result = mysqli_query($conector, "SELECT DATABASE()")) {
	  $row = mysqli_fetch_row($result);
	  echo "Estoy conectado a la BBDD: " . $row[0] . "<br/>";
	  mysqli_free_result($result);
	}

    	$tabla_alumnnos = "CREATE TABLE IF NOT EXISTS alumnos (
		codalumno INT(10) PRIMARY KEY not null,
		nombre VARCHAR(30) not null,
		direccion VARCHAR(45) not null,
		curso VARCHAR(10) not null
		)";
		
		if (mysqli_query($conector, $tabla_alumnos)) {
		    echo "Tabla creada correctamente."."<br/>";
  		    
		} else {
		    echo "No ha sido posible crear la tabla: ".mysqli_error($conector);
		}

	$mysqli_close($conector);

	} else {
	     echo "Ha fallado la conexión con MySQL: " .  mysqli_connect_error();
	     exit();	
	}

	
	?>
    </body>
</html>
