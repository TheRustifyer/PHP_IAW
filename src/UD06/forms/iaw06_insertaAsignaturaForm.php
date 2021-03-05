<html>
    <head>
	<title>Nueva asignatura</title>
    </head>
	<h1>Introduzca los datos de la asignatura a crear</h1>
    <body>

	<form method="POST" action="iaw06_insertaCurso.php">

            Código del alumno:<br> 
	    <input type="text" id="codalumn" name="codalumn"/>
	    <br><br />

            Código de la asignatura:<br> 
	    <input type="text" id="codasig" name="codasig"/>
	    <br><br />

            Evaluación:<br> 
	    <input type="text" id="eval" name="eval"/>
	    <br><br />

            Nota:<br> 
	    <input type="text" id="nota" name="nota"/>
	    <br><br />

	    <button type="submit" value="ENVIAR">Enviar</button>
	    <button type="reset" value="LIMPIAR">Limpiar</button>

	</form>

    </body>
    
</html>
