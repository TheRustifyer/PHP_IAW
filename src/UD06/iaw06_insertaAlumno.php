    <head>
        <title>Nuevo Alumno</title>
    </head>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Estado del registro de un nuevo alumno</h1>
	<?php
	    	include 'constants.php';
		include 'conector.php';


		// Cojo los datos enviados a través del formulario    
		$codalum = $_POST['codalum'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$curso = $_POST['curso'];

		// Inserto los datos en BBDD
	    	$insert_alumno = "INSERT INTO alumnos 
	  		(codalumno, nombre, direccion, cursoId)
			VALUES($codalum, '$nombre', '$direccion', $curso);";


	if ($result = mysqli_query($conector, $insert_alumno)) {
	    echo "<h3 class='center'>Alumno " . $nombre ." creado correctamente."."<br/>"."</h3>";
  		    
	} else {
	    echo ("No ha sido posible registrar el alumno -> ". mysqli_error($conector))."<br/>"."<br/>";
	}
	    
	?>
	<div class="center">
	    <form action="/PHP_IAW/src/UD06/forms/iaw06_insertaAlumnoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
    </body>
</html>


