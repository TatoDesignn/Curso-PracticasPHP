<?php

$inicio = 1;

$respuesta2 = readline("A cual quieres ir: ");

for($i = 1; $i < $respuesta2; $i++){
        if($i == 1)
        {
            $suma = $inicio; 
            $total = $suma;
        }
        elseif($i == 2){
            $suma2 = $suma + $inicio;
            $total = $suma2;
        }
        else{
            $inicio = $suma;
            $suma = $suma2;
            $suma2 = $suma + $inicio;
            $total = $suma2;
        }
}

echo "Para ir a $respuesta2 hay $total forma";
