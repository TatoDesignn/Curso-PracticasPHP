<?php

$respuesta = (int) (readline("Ingresa tus ganancias: "));

if($respuesta > 100){
    echo "Tu ganacias fueron retiradas con exito.";
}
else{
    echo "lo sentimos no puedes";
}