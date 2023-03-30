<?php

$respuesta = readline("Ingresa los segundos: ");

$horas = (int) ($respuesta / 3600);
$respuesta = (int) ($respuesta % 3600);
$minutos = (int) ($respuesta / 60); 
$segundos = (int) ($respuesta % 60);

echo "Horas: " .$horas ." Minutos: " .$minutos ." Segundos: " .$segundos;
