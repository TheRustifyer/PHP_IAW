# Prácticas de PHP

Repositorio para las prácticas del lenguaje de programación PHP requeridas en la asignatura `Implantación de Aplicaciones Web` para el ciclo superior de Formación Profesional ASIR => `Administración de Sistemas Informáticos en Red`.

## [Práctica 1, enunciado:](https://github.com/Pyzyryab/PHP_IAW/blob/main/src/iaw05_notamedia.php)

### Apartado 1: Script para el cálculo de la nota media de un módulo de ASIR

Realiza un script en PHP de nombre iaw05_notamedia.php que permita almacenar en un array asociativo las notas de las 4 prácticas de IAW (donde las claves “PracticaX” son las prácticas de las distintas unidades) y en otro array asociativo las notas de IAW de los 2 exámenes (donde las claves “ExamenXXXX” son los exámenes realizados de las unidades). Sabiendo que la dos notas de los exámenes valen lo mismo, y que las cuatro notas de las prácticas también valen lo mismo, el script deberá calcular la calificación final que vendrá dada por el 40% de las prácticas y el 50% de los exámenes. 



## [Práctica 2, enunciado:](https://github.com/Pyzyryab/PHP_IAW/blob/main/src/iaw05_datosempleados.php)

### Apartado 2: Script que calcula datos recibidos a través de un formulario web.

Crea una página web llamada iaw05_datosempleados.html. Esta página debe mostrar un formulario a través del cual se deben introducir los siguientes datos de usuario: nombre, apellidos y la fecha de alta en la empresa con el formato dd/mm/yyyy. Una vez que estos datos sean recibidos, deberán ser procesados generando un script de nombre iaw05_resultado.php cuyo contenido será una tabla html en la que deben aparecer los siguientes datos:

            Nombre y apellidos del empleado.
            Día de la semana en la que empezó a trabajar.
            Una representación textual completa del mes en el que empezó a trabajar.
            Su número mágico, que se obtiene sumando los 4 dígitos del año de alta en la empresa menos los dos dígitos correspondientes a su día de alta en la empresa. 
            En caso de que el resultado sea negativo, su número mágico será el 0.
