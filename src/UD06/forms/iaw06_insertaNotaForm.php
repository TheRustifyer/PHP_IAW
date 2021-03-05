<html>
    <head>
	<title>Notas</title>
    </head>
	<h1>Inserte la nota del alumno</h1>
    <body>

	<form method="POST" action="../iaw06_insertaNota.php">

            Código de la asignatura:<br> 
	    <input type="text" id="codasig" name="codasig"/>
	    <br><br />

            Nombre de la asignatura:<br> 
	    <input type="text" id="nomasig" name="nomasig"/>
	    <br><br />

            Horas:<br> 
	    <input type="text" id="horas" name="horas"/>
	    <br><br />

	    <button type="submit" value="ENVIAR">Enviar</button>
	    <button type="reset" value="LIMPIAR">Limpiar</button>

	</form>

    </body>
    
</html>
