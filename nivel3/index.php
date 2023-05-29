<?php
echo "<h2>Ejercicio 1</h2>";

function cubo($n) {
     return pow($n,3);
}

$listaNumeros = array(1,2,3,4,5,6);

$listaNumerosAlCubo = array_map('cubo', $listaNumeros); // aplica la funcion a cada elemento

print_r($listaNumeros);
echo "<br>";
print_r($listaNumerosAlCubo);


echo "<h2>Ejercicio 2</h2>";

function stringLongEsPar ($string) {
    return strlen($string) % 2 == 0;
}

$listaPalabras = array("Red", "Fuego", "Agua", "Azul");
$listaPalabrasFiltro = array_filter($listaPalabras, 'stringLongEsPar'); // filtra elementos segun la funcion del parametro

print_r($listaPalabrasFiltro);

echo "<h2>Ejercicio 3</h2>";

function esPrimo($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function sumarNumerosPrimos($acumulador, $num) {
    if (esPrimo($num)) {
        return $acumulador + $num;
    }
    return $acumulador;
}

function obtenerNumerosPrimos($array) {
    return array_reduce($array, 'sumarNumerosPrimos', 0);
}

$numeros = array(2, 4, 7, 9, 10, 13, 15, 17, 21, 23, 28, 29, 31, 33, 37);
echo obtenerNumerosPrimos($numeros);


?>