<html>
    <head>
	<title>Resultados</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
    </head>
	
    <?php include 'conector.php'; ?>
	
    <body>
	<h1 class="center">Datos por categoría</h1>
	</br>

	<h2 class="center">Alumnos del centro</h2>
	</br>

	<?php
	    // Creo una query hacia la tabla alumnos y la almaceno en una variable, con objeto de pasársela como argumento a la func mysqli_query, junto con el conector.
	    $qry_alum = "SELECT * FROM alumnos order by nombre";
	    $res_alum = mysqli_query($conector, $qry_alum);
		
	    /* Itero los resultados de manera que cada vuelta del bucle for almacena el dato en $fila, para posteriormente iterarlos de nuevo con un bucle for each y poder obtener el valor de cada columna.*/
	    echo "Resultados de la búsqueda: " . "</br>" . "</br>";

	    for ($i=0; $i < mysqli_num_rows($res_alum); $i++) {
	    
		$row = mysqli_fetch_row($res_alum);
	    
		?>
		<table>
	    	    <tr>
		        <?php
		            foreach ($row as $value) {

			        echo "<td>". $value ."</td>";
			
		            }
		            
		        ?>	
	            </tr>
		</table>
		<?php
    		    } // Llave de cierre del bucle for exterior
		    mysqli_free_result($res_alum);
		?>

	<?php
	    // El resto de resultados de tirar "querys" contra la BBDD son de proceso análogo al reflejado en la tabla alumnos.
	?>

	<h2 class="center">Cursos del centro</h2></br>

	<table class="center">

	<?php
	    /* En este caso, el único cambio es que uso directamente un único bucle for con la función mysqli_fetch_array, el cual me devuelve un array de datos al cuál accedo al resultado de la columna que deseo mediante 'array subscript'.*/
	    $qry_cursos = "SELECT * FROM curso order by curso";
	    $res_cursos = mysqli_query($conector, $qry_cursos);

	    echo "Resultados de la búsqueda: " . "</br>" . "</br>";

	    for ($i=0; $row = mysqli_fetch_array($res_cursos, MYSQLI_ASSOC); $i++){
	?>
	    <tr>
		<td><?php echo $row['curso'];?></td>
		<td><?php echo $row['nomcurso'];?></td>
		<td><?php echo $row['numalumn'];?></td>
	    </tr>
	</table>

	<?php
	   }
	   mysqli_free_result($res_cursos); 
	?>

	
	<h2 class="center">Asignaturas del centro</h2></br>

	<?php

	    $qry_asig = "SELECT * FROM asignaturas order by nomasig";
	    $res_asig = mysqli_query($conector, $qry_asig);

	    echo "Resultados de la búsqueda: " . "</br>" . "</br>";

	    for ($i=0; $i < mysqli_num_rows($res_asig); $i++) {
	    
		$row = mysqli_fetch_row($res_asig);
	    
		?>
		<table>
	    	    <tr>
		        <?php
		            foreach ($row as $value) {

			        echo "<td>". $value ."</td>";
			
		            }
		            
		        ?>	
	            </tr>
		</table>
		<?php
    		    } // Llave de cierre del bucle for exterior
		    mysqli_free_result($res_asig);
		?>


	<h2 class="center">Notas de los alumnos del centro</h2></br>

	<?php

	    $qry_nota = "SELECT * FROM notas order by codasig";
	    $res_nota = mysqli_query($conector, $qry_nota);

	    echo "Resultados de la búsqueda: " . "</br>" . "</br>";

	    for ($i=0; $i < mysqli_num_rows($res_nota); $i++) {
	    
		$row = mysqli_fetch_row($res_nota);
	    
	?>
		<table>
	    	    <tr>
		        <?php
		            foreach ($row as $value) {

			        echo "<td>". $value ."</td>";
			
		            }
		            
		        ?>	
	            </tr>
		</table>
		<?php
    		    } // Llave de cierre del bucle for exterior
		    mysqli_free_result($res_nota);
		?>

    </body>
</html>
