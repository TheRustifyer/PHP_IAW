<?php
/* Apartado 1: Script para el cálculo de la nota media de un módulo de ASIR.

Bien, necesitamos dos arrays asociativos, uno que almacene los valores de las prácticas y otro que almancene los valores de los exámenes.
*/


//Notas de las prácticas.
$nota_p1 = 7;
$nota_p2 = 5;
$nota_p3 = 7;
$nota_p4 = 5;

$notas_practicas = array("Práctica 1" => "$nota_p1",
"Práctica 2" => "$nota_p2",
"Práctica 3" => "$nota_p3",
"Práctica 4" => "$nota_p4"); 

//Notas de los exámenes 
$nota_e1 = 9;
$nota_e2 = 10;

$notas_examenes = array("Examen 1" => "$nota_e1", "Examen 2" => "$nota_e2");


//Calculamos la media aritmética de los valores de las prácticas:

/* Para evitar 'hardcodear' los valores, usaremos las funciones 
de PHP array_sum, la cual nos permite sumar los valores de un array dado, y la
función count, la cual nos devuelve el número de elementos de un array.*/

$suma_elementos_array_practicas = array_sum($notas_practicas);

$numero_elementos_array_practicas = count($notas_practicas);

$nota_media_practicas = $suma_elementos_array_practicas / $numero_elementos_array_practicas;

echo "Nota media prácticas: " . $nota_media_practicas ."\n";

echo "<br>"; //Añadimos un salto de línea para favorecer la legibilidad del código

//Repetimos análogamente el proceso para los exámenes:

$suma_elementos_array_examenes = array_sum($notas_examenes);

$numero_elementos_array_examenes = count($notas_examenes);

$nota_media_examenes = $suma_elementos_array_examenes / $numero_elementos_array_examenes;

echo "Nota media exámenes: " . $nota_media_examenes;

echo "<br>";
echo "<br>";

$nota_final = ($nota_media_practicas * 0.40) + ($nota_media_examenes * 0.5); 


echo "La nota final del alumno es " . $nota_final ." sobre 9.";
?>
