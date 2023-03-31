<?php

$palabras = ["juego", "salir", "amigos", "tato"];
$maxIntentos = 5;

$seleccion = strtolower($palabras[rand(0, 3)]);
$tamano = strlen($seleccion);
$datos = str_pad("", $tamano, "_");
$intentos = 0;

function clear(){
    if(PHP_OS === "WINNT"){
        popen("cls", "w");
    }
    else{
        system("clear");
    }
}

while ($intentos <= $maxIntentos && $datos != $seleccion){

    echo "\nBienvenido al juego del ahorcado. \n";
    echo "Es una palabra de $tamano letras. \n";
    echo "Tienes un maximo de $maxIntentos intentos.\n\n";
    echo $datos . "\n\n";

    $respuesta = strtolower(readline("Porfavor ingresa una letra: \n"));

    if(str_contains($seleccion, $respuesta)){

        $offset = 0;
        while(($posicion = strpos($seleccion, $respuesta, $offset)) !== false){
            $datos[$posicion] = $respuesta;
            $offset = $posicion + 1;
        }
        echo "\n". $datos . "\n\n";
    }
    else{
        $intentos++;
        clear();
        echo "\nUPS! esta letra no esta dentro de la palabra\n";
        echo "Te quedan ". ($maxIntentos - $intentos) . " intentos!.\n";
        sleep(2);
    }
    clear();
}

if($datos == $seleccion){
    echo "\nLo LOGRASTE! la palabra era '$seleccion'";
}
else{
    echo "Lo sentimos no te quedan mas intentos.";
}


