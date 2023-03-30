<?php

//Asi se define las variables
$variable = 10;
$variable_string = "Soy un string";

//esto es una constante
define("CONSTANTE", 10);

//sirve para mostrar un mensaje
echo "Hola $variable_string el numero es $variable";

//me muestra que es esta variable
var_dump($variable);

//para cambiar (forzar) una variable se puede hacer asi:
$numero = "10";
$numero = (int) $numero;

//operadores logicos tambien se puede con and y or 
var_dump(5 + 5 == 10 && 3 + 3 == 6);
var_dump(5 + 4 == 10 || 3 + 3 == 6);
$booleano = true;
var_dump(!$booleano);

//dos nuevos operadores
//nave espacial
echo 2 <=> 1; //1
echo 1 <=> 1 ; //0
echo -50 <=> 2; //-1
//fusion de null 
$nombre_juan = "Juan";
echo $nombre_pepito ?? $nombre_juan; //si nombre pepito es null o no existe asigna el valor de nombre juan 

//Arreglo
$miArreglo = ["mi primer", "Mi segundo"];
echo "Mi primer elemento de mi arreglo es $miArreglo[0]";

//Arreglo asociativo 
$miArregloAsociativo = array("Nombre"=>"Juan",
"Apellido"=>"Restrepo",
"Edad"=>15);
echo "Mi nombre es" .$miArregloAsociativo['Nombre'];

//Arreglo de Arreglos
$personas = array(
    "jose" => array(
        "nombre" => "Jose",
        "apellido" => "Restrepo",
        "Edad" => 59
    ),
    "gloria" => array(
        "nombre" => "Gloria",
        "apellido" => "Cardona",
        "edad" => 47
    )
);
echo "Mi primer arreglo es {$personas['jose']['nombre']}
de apellido {$personas['jose']['apellido']} y edad {$personas['jose']['Edad']}";

//Manipular arreglos
$edades = [12, 22, 40, 34];
//contar cuantos elementos
count($edades);
//push (añade al final)
array_push($edades, 13);
//explode para separar string y guardarlo en un arreglo
$frutas = "Manzana,Pera,Naranja";
$arregloFrutas = explode(",", $frutas);
//Implode hace lo contrario a explode
$comidaArreglo = ["Pizza", "Salchicha", "Papas"];
$comida = implode(" ", $comidaArreglo);