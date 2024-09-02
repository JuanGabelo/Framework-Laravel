<?php

$productos = [
    "Computador" => [
        "precio" => 3200000,
        "detalles" => [
            "disponible" => true,
            "reseñas" => ["Muy Rappido y buen procesador", "Excelente rendimiento"]
        ]
    ],
    "Celular" => [
        "precio" => 2000000,
        "detalles" => [
            "disponible" => false,
            "reseñas" => ["Buen precio", "la batería podría ser mejor"]
        ]
    ],
    "Tablet" => [
        "precio" => 2800000,
        "detalles" => [
            "disponible" => true,
            "reseñas" => ["Compacta y potente", "Buena relación calidad-precio"]
        ]
    ],
    "Audifonos" => [
        "precio" => 170000,
        "detalles" => [
            "disponible" => true,
            "reseñas" => ["Sonido claro", "Cómodos para usar todo el día"]
        ]
    ]
];

foreach ($productos as $nombre => $info) {
    if ($info['detalles']['disponible']) {
        echo "Producto: $nombre, Precio: " . $info['precio'] . "\n <br>";
    }
}

?>
