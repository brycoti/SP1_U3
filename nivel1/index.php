<?php
// Ejercicio 1:
echo "<h2>Ejercicio 1</h2>"; 
$listaNumeros  = array(44, 7, 89, 3333, 7653);

print_r($listaNumeros);
echo "<br><br><hr>";

// ejercicio 2:
echo "<h2>Ejercicio 2</h2>";
$X = array(10, 20, 30, 40, 50, 60);

echo 'La longitud de $X es '.  var_dump($X) . "de " . count($X) . "." . "<br><br>";
echo " Eliminando la posición [4] <br><br>";

unset($X[4]);
print_r($X);  

echo " <br><br> Normalizando la array <br><br>";

$X = array_values($X);

print_r($X);
echo "<br><br><hr>";

// ejercicio 3 
echo "<h2>Ejercicio 3</h2>";
function buscarCaracter($arrayPalabras, $caracter) {
    foreach ($arrayPalabras as $palabra) {
        if (strpos($palabra, $caracter) !== false) {
            return true;
        }
    }
    return false;
}

$saludos = array('hola', 'buenos dias', 'ciao', 'adios', 'hello', 'hasta luego');

print_r($saludos);

$hayCaracter = buscarCaracter($saludos, "s");

echo " Buscando si hay el carácter 's' como parametro: <br>";

var_dump($hayCaracter);

echo  "<br><br><hr>";

// ejercicio 4 
echo "<h2>Ejercicio 4</h2>";

$presentacion = array(
  "nombre" => "Bry",
  "edad" =>  100,
  "email"  => "ejemplo@ejemplo.com",
  "comida_preferida" => "Ramen con curry"
);

print_r($presentacion);
?>