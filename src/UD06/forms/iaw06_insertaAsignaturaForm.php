<html>
    <head>
	<title>Nueva asignatura</title>
    </head>
	
    <body>
	<h1>Introduzca los datos de la asignatura a crear</h1>
	
	</br>

	<form method="POST" action="../iaw06_insertaAsignatura.php">

            Código de la asignatura:<br> 
	    <input type="text" id="codasig" name="codasig"/>
	    <br><br />

            Nombre de la asignatura:<br> 
	    <input type="text" id="nomasig" name="nomasig"/>
	    <br><br />

            Horas de la asignatura:<br> 
	    <input type="text" id="horas" name="horas"/>
	    <br><br />

	    <button type="submit" value="ENVIAR">Enviar</button>
	    <button type="reset" value="LIMPIAR">Limpiar</button>

	</form>

    </body>
    
</html>
