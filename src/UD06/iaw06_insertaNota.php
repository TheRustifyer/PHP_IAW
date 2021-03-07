    <head>
        <title>Notas</title>
    </head>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Notas del alumno</h1>
	<?php
	    	include 'constants.php';
		include 'conector.php';


		// Cojo los datos enviados a través del formulario    
		$codalum = $_POST['codalum'];
		$codasig = $_POST['codasig'];
		$eval = $_POST['eval'];
		$nota = $_POST['nota'];

		// Inserto los datos en BBDD
	    	$insert_nota = "INSERT INTO notas 
	  		(codalum, codasig, eval, nota)
			VALUES($codalum, $codasig, $eval, $nota);";


	if ($result = mysqli_query($conector, $insert_nota)) {
	    echo "<h3 class='center'>Nota del alumno " . $codalum ." guardada correctamente."."<br/>"."</h3>";
		    mysqli_free_result($result);
  		    
	} else {
	    echo ("No ha sido posible registrar la nota del alumno -> ". mysqli_error($conector))."<br/>"."<br/>";
	}
	    
	?>
	<div class="center">
	    <form action="/PHP_IAW/src/UD06/forms/iaw06_insertaNotaForm.php">
		<input type="submit" value="Volver al formulario" />
            </form>
	</div>
    </body>
</html>
