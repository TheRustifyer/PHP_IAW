<html>
    <head>
        <title>Nuevo Curso</title>
    </head>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Estado de la solicitud</h1>
	<?php
	    	include 'constants.php';
		include 'conector.php';


		// Cojo los datos enviados a través del formulario    
		$curso = $_POST['curso'];
		$nomcurso = $_POST['nomcurso'];
		$numalum = $_POST['numalum'];

		// Inserto los datos en BBDD
	    	$insert_curso = "INSERT INTO curso 
	  		(curso, nomcurso, numalumn)
			VALUES($curso, '$nomcurso', $numalum);";

		if ($result = mysqli_query($conector, $insert_curso)) {
		    echo "<h3 class='center'>Curso " . $nomcurso ." creado correctamente."."<br/>"."</h3>";
		    mysqli_free_result($result);
	  		    
		} else {
		    echo ("No ha sido posible crear un nuevo curso. -> ". mysqli_error($conector))."<br/>"."<br/>";
		}
	    
	?>
	<div class="center">
	    <form action="/PHP_IAW/src/UD06/forms/iaw06_insertaCursoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
    </body>
</html>
