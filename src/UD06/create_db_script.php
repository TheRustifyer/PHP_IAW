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
	        
		if (mysqli_query($conector, $createDatabase)) {
		    echo "BBDD ".NOMBRE_BBDD. " creada correctamente"."<br/>";
  		    
		} else {
		    echo "No ha sido posible crear la BBDD."."<br/>". "El error es -> " . mysqli_error($conector)."<br/>"."<br/>";
		}
	        mysqli_select_db($conector, NOMBRE_BBDD);

	    // Compruebo la BBDD a la que estoy actualmente conectado
	    if ($result = mysqli_query($conector, "SELECT DATABASE()")) {
	        $row = mysqli_fetch_row($result);
	        echo "Conectado a la BBDD: " . $row[0] . "<br/>". "<br/>";
	        mysqli_free_result($result);
	    }

	    // Creo las tablas requeridas. Empiezo por curso primero, para poder después establecer la relación Foreign Key correctamente:
    		$tabla_curso = "CREATE TABLE curso (
  			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  			curso INT(10) NOT NULL,
  			nomcurso VARCHAR(30) NOT NULL,
  			numalumn INT(11)
			);";
		
		if (mysqli_query($conector, $tabla_curso)) {
		    echo "Tabla creada correctamente."."<br/>";
  		    
		} else {
		    echo "No ha sido posible crear la tabla, o esta ya existe en la BBDD."."<br/>". "El error es -> " . mysqli_error($conector)."<br/>";
		}
		

		// Tabla para los alumnos
    		$tabla_alumnos = "CREATE TABLE alumnos (
  			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  			codalumno INT(10) NOT NULL,
  			nombre VARCHAR(30) NOT NULL,
  			direccion VARCHAR(45) NOT NULL,
  			cursoId INT(6) UNSIGNED,
  			CONSTRAINT fk_curso 
  			FOREIGN KEY(cursoId) 
    			REFERENCES curso(id)
			);";
		
		if (mysqli_query($conector, $tabla_alumnos)) {
		    echo "Tabla creada correctamente."."<br/>";
  		    
		} else {
		    echo "No ha sido posible crear la tabla, o esta ya existe en la BBDD."."<br/>". "El error es -> " . mysqli_error($conector)."<br/>";
		}

		// Tabla para las notas
    		$tabla_notas = "CREATE TABLE notas (
  			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  			codalum INT(10) NOT NULL,
  			codasig INT(10) NOT NULL,
  			eval INT(11) NOT NULL,
  			nota INT(11)
			);";
		
		if (mysqli_query($conector, $tabla_notas)) {
		    echo "Tabla creada correctamente."."<br/>";
  		    
		} else {
		    echo "No ha sido posible crear la tabla, o esta ya existe en la BBDD."."<br/>". "El error es -> " . mysqli_error($conector)."<br/>";
		}


		// Tabla para las asignaturas
    		$tabla_asignaturas = "CREATE TABLE asignaturas (
  			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  			codasig INT(10) NOT NULL,
  			nomasig VARCHAR(30) NOT NULL,
  			horas INT(11)
			);";
		
		if (mysqli_query($conector, $tabla_asignaturas)) {
		    echo "Tabla creada correctamente."."<br/>";
  		    
		} else {
		    echo "No ha sido posible crear la tabla, o esta ya existe en la BBDD."."<br/>". "El error es -> " . mysqli_error($conector)."<br/>";
		}


	} else {
	     echo "Ha fallado la conexión con MySQL: " .  mysqli_connect_error();
	     exit();	
	}

	$mysqli_close($conector);

	?>
    </body>
</html>
