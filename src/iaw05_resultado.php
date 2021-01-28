<?php

//Recogemos los valores enviados desde el formulario

//Iniciamos la sesión
session_start();

if (!empty($_POST['nombre'])) {
    $_SESSION['nombre'] = $_POST['nombre'];
}
else {
    $_SESSION['nombre'] = "Anonymous";
}
/* Uso el operador ternario para los apellidos al igual que
* en el ejemplo del código en la UD, para practicar con el.
*/

$_SESSION['apellidos'] = (!empty($_POST['apellidos'])) ? $_POST['apellidos'] : "Campo 'apellidos' vacío";


//El campo date siempre devolverá un valor date, así que se lo asignamos directamente.

$_SESSION['fecha_de_alta'] = $_POST['fecha_de_alta'];


//Una vez recuperados los datos pasados en el form,
//procedemos a ejecutar la tarea requerida

//Nombre y apellidos del empleado

echo "<h2>Nombre completo del empleado: </h2>".$_SESSION['nombre']."&nbsp;".$_SESSION['apellidos'].".<br /><br />";

/*El día de la semana. Usamos la función date de PHP, le pasamos como argumentos 'l-d', que representa: devuélveme los datos en el formato día de la semana, y strtotime convertir una cadena de tipo fecha a una fecha UNIX.
*/
echo "<h2>Día de la semana que empezó a trabajar: </h2>".date('l-d', strtotime($_SESSION['fecha_de_alta'])).".<br /><br />";

// Representación textual del mes que empezó a trabajar.
echo "<h2>Nombre del mes en el que empezó a trabajar: </h2>".date('F', strtotime($_SESSION['fecha_de_alta'])).".<br /><br />";

// Número mágico del empleado

// Primero recupero los dígitos que representan el año
$year = date('Y', strtotime($_SESSION['fecha_de_alta']));

/* Para la operación, usaré un bucle while. Asingamos un contador el cual almacenará la suma de los números, y dentro del cuerpo del bucle while usamos un algorimto clásico de programación, en el cual se usa la división y su módulo cómo vía para obtener una suma, en este caso
aprovechándonos que trabajamos en base 10.
*/
 
$sum_each_year_int = 0;
while($year!=0) 
    {
	$remainder=$year%10; // base 10.
	$year=$year/10;

	$sum_each_year_int= $sum_each_year_int + $remainder;
}

// Recuperamos los dígitos del día dentro de 'fecha_de_alta'
$day = date('d', strtotime($_SESSION['fecha_de_alta']));

// Y por último nos aseguramos que en caso de que el resultado de la operación no nos devuelva un numero negativo, y si no que nos devuelva el resultado.
$magic_number = ($magic_number > 0) ? $sum_each_year_int - $day : 0;


echo "<h2>Número mágico del empleado: </h2>".$magic_number.".<br /><br />";

?>
