<?php

//  Debemos solicitarle al usuario la cantidad de segundos a convertir. Para esto utilizamos la función readline() el cual nos ayuda a pedir datos:
// readline("Ingresa el tiempo en segundos: ");

// Estos datos los guardaremos en una variable:
$segundos = readline("Ingresa el tiempo en segundos: ");


// Para la conversión debemos primero obtener la cantidad de horas. Para ello, debemos dividir la cantidad de segundos ingresados por el usuario por la cantidad de segundos que tiene 1 hora:
$horas = (int) ($segundos / 3600); # 1 hora tiene 3600 segundos


// --------------
// Ya que tenemos la cantidad de horas, vamos a obtener la cantidad de minutos. Previo a esto, tenemos que obtener el residuo de la división anterior, pues los segundos que sobró representarán la cantidad de minutos. Además, el valor de $segundos será reasignado al valor de este residuo:
$segundos = (int) ($segundos % 3600); # Sacamos el módulo para obtener el residuo de una división.

// Convertimos la cantidad de segundos sobrantes a minutos:
$minutos = (int) ($segundos / 60); # 1 minuto tiene 60 segundos.

// Finalmente, el residuo de esta última división van a representar los segundos:
$segundos = (int) ($segundos % 60);
// --------------



echo "Son $horas horas, $minutos minutos y $segundos segundos.";