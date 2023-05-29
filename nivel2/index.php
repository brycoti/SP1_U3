<?php
echo "<h2>Ejercicio 1</h2>";

$listaEnteros1 = array(2,5,66,78,101,33,99);
$listaEnteros2 = array(33,56,43,9,66,0,9,101);

$comparacion = array_intersect($listaEnteros1, $listaEnteros2); // retorna elementos en comun
$fusion = array_merge($listaEnteros1, $listaEnteros2); 

print_r($comparacion);
echo "<br>";
print_r($fusion);
echo "<br><br><hr>";

echo "<h2>Ejercicio 2</h2>";

function calcularMedias($listaNotasAlumnos){
    $mediaAlumnos = array();
    foreach ($listaNotasAlumnos as $alumno => $notas) {
        $mediaAlumno = array_sum($notas) / count($notas);
        $mediaAlumnos[$alumno] = $mediaAlumno;
    }

    $mediaClase = array_sum($mediaAlumnos) / count($listaNotasAlumnos);
    print_r($mediaAlumnos);
    echo   "<br><br>";
    echo "La media de la clase es: " . $mediaClase . "<br><br>";
}

$listaNotasAlumnos = array(
    "alumno1" => array(2, 6, 7, 4, 8),
    "alumno2" => array(7, 6, 9, 8, 6),
    "alumno3" => array(9, 9, 5, 7, 6),
    "alumno4" => array(5, 4, 7, 3, 6),
    "alumno5" => array(8, 7, 7, 9, 7)
);

calcularMedias($listaNotasAlumnos);
?>