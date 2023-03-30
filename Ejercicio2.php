<?php

$respuesta = readline("Ingresa las horas: ");
$respuesta2 = readline("Ingresa los minutos: ");
$respuesta3 = readline("Ingresa los segundos: ");

$segundos = $respuesta * 3600;
$segundos += $respuesta2 * 60;
$segundos += $respuesta3;

echo "Segundos: $segundos";