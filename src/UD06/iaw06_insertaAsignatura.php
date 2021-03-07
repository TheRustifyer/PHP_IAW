    <head>
        <title>Asignaturas</title>
    </head>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Nueva asignatura</h1>
	<?php
	    	include 'constants.php';
		include 'conector.php';


		// Cojo los datos enviados a través del formulario    
		$codasig = $_POST['codasig'];
		$nomasig = $_POST['nomasig'];
		$horas = $_POST['horas'];

		// Inserto los datos en BBDD
	    	$insert_asig = "INSERT INTO asignaturas 
	  		(codasig, nomasig, horas)
			VALUES($codasig, '$nomasig', $horas);";


	if ($result = mysqli_query($conector, $insert_asig)) {
	    echo "<h3 class='center'>Asignatura " . $nomasig ." creada correctamente."."<br/>"."</h3>";
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
