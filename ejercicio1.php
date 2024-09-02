<?php

$estudiantes = [
    "Juan" => [85, 90, 78],
    "Mauricio" => [88, 74, 92],
    "Jesus" => [95, 100, 87],
    "Diego" => [70, 85, 75]
];

$mejorPromedio = 0;
$mejorEstudiante = "";

foreach ($estudiantes as $nombre => $calificaciones) {
    $sumaCalificaciones = array_sum($calificaciones);
    $numeroDeCalificaciones = count($calificaciones);
    $promedio = $sumaCalificaciones / $numeroDeCalificaciones;

    echo "El promedio de $nombre es: $promedio\n <br>";
    

    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}

echo "El estudiante con el promedio más alto es $mejorEstudiante con un promedio de $mejorPromedio.\n";

?>