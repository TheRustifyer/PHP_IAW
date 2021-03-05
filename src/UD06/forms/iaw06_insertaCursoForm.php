<html>
    <head>
	<title>Nuevo Curso</title>
    </head>
	<h1>Formulario para el registro de un nuevo Curso Curricular</h1>
    <body>

	<form method="POST" action="../iaw06_insertaCurso.php">

            Curso:<br> 
	    <input type="text" id="curso" name="curso"/>
	    <br><br />

            Nombre del curso:<br> 
	    <input type="text" id="nomcurso" name="nomcurso"/>
	    <br><br />

            Número de alumnos:<br> 
	    <input type="text" id="numalum" name="numalum"/>
	    <br><br />

	    <button type="submit" value="ENVIAR">Enviar</button>
	    <button type="reset" value="LIMPIAR">Limpiar</button>

	</form>

    </body>
    
</html>
