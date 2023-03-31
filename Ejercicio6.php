<?php

function obtener_hora(){
    return date(("h:i a"));
}

echo "Hola! ¿Me podrias decir que hora es? \n";
echo "Claro son las ".obtener_hora();