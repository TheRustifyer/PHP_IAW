<html>
    <head>
	<title>Nuevo alumno</title>
    </head>
	<h1>Formulario para el registro de nuevos alumnos</h1>
    <body>

	<form method="POST" action="../iaw06_insertaAlumno.php">
	    Código del alumno:<br>
	    <input type="text" id="codalum" name="codalum" />
	    <br><br />
 
	    Nombre:<br>
	    <input type="text" id="nombre" name="nombre" />
	    <br><br />

            Dirección:<br>
	    <input type="text" id="direccion" name="direccion" />
	    <br><br />

            Curso:<br> 
	    <input type="text" id="curso" name="curso"/>
	    <br><br />

	    <button type="submit" value="ENVIAR">Enviar</button>
	    <button type="reset" value="LIMPIAR">Limpiar</button>

	</form>

    </body>
    
</html>
