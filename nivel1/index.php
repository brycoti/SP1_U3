<?php
// Ejercicio 1: 
$listaNumeros  = array(44, 7, 89, 3333, 7653);

print_r($listaNumeros);
echo "<br><br><hr>";
?>

<?php
// ejercicio 2:
$X = array(10, 20, 30, 40, 50, 60);

echo 'La longitud de $X es '.  var_dump($X) . "de " . count($X) . "." . "<br><br>";

array_slice($X,1,1);
print_r($X);
echo "<br><br>";
array_values($X);
print_r($X);
        // faltar mirar el eliminar un elemento y encontrar funcion que normalice
echo "<br><br><hr>";
?>

<?php
// ejercicio 3 

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
echo "<br>";
var_dump($hayCaracter);
echo  "<br><br><hr>";
?>

<?php
// ejercicio 4 
$presentacion = array(
  "nombre" => "Bry",
  "edad" =>  100,
  "email"  => "ejemplo@ejemplo.com",
  "comida_preferida" => "Ramen con curry"
);

print_r($presentacion);


?>