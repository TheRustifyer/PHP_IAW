<html>
    <head>
	<title>Control de empleados</title>
    </head>
	<h1>Formulario para el registro y el control de empleados</h1>
    <body>

	<form method="POST" action="iaw05_resultado.php">
	    Nombre:<br>
	    <input type="text" id="nombre" name="nombre" />
	    <br><br />
            Apelidos:<br>
	    <input type="text" id="apellidos" name="apellidos" />
	    <br><br />
            Fecha de alta en la empresa:<br> 
	    <input type="date" id="fecha_de_alta" name="fecha_de_alta"/>
	    <br><br />

	    <button type="submit" value="ENVIAR">Enviar</button>
	    <button type="reset" value="LIMPIAR">Limpiar</button>

	</form>

    </body>
    
</html>
