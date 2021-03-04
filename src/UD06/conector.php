<?php
	//Creo el conector una vez creada la BBDD
	include 'constants.php';
	
	$conector = mysqli_connect(HOST, USER, PASSWORD, NOMBRE_BBDD) or die("Coud not open a connection");
?>
