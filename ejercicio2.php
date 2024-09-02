<?php

$empleados = [
    "Juan Gabelo" => [
        "salario" => 3000000,
        "fecha_contratacion" => "2023-10-09",
        "departamento" => "Tecnología"
    ],
    "Mauricio Bohorquez" => [
        "salario" => 2000000,
        "fecha_contratacion" => "2019-06-11",
        "departamento" => "Marketing Digital"
    ],
    "Jesus Reinoso" => [
        "salario" => 1800000,
        "fecha_contratacion" => "2021-11-22",
        "departamento" => "IT"
    ],
    "Alejandra" => [
        "salario" => 2500000,
        "fecha_contratacion" => "2015-11-11",
        "departamento" => "Recursos Humanos"
    ]
];

foreach ($empleados as $nombre => $detalles) {
    echo "Empleado: $nombre, Salario: " . $detalles['salario'] . "\n <br>";
}

?>