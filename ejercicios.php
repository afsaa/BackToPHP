<?php
// Ejercicios de arrays
// Ejercicio 1
$arreglo = [

    'keyStr1' => 'lado',
    0 => 'ledo',

    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'

];
foreach ($arreglo as $value) {
    echo $value . ", ";
    if ($value === end($arreglo)) {
        echo " decirlo al revés lo dudo. <br>";
    }
}
// Ejercicio 2
$paises = [
    "Colombia" => ["Pereira", "Medellín", "Bogotá"],
    "Brasil" => ["Sao Pablo", "Salvador Bahía", "Rio de Janeiro"],
    "Argentina" => ["Buenos Aires", "La Plata", "Rosario"],
    "Chile" => ["La Serena", "Santiago", "Antofagasta"],
    "Perú" => ["Lima", "Cusco", "Piura"],
];

foreach ($paises as $pais => $ciudades) {
    echo "<br><strong>{$pais}</strong>: ";
    foreach ($ciudades as $ciudad) {
        echo "{$ciudad} ";
    }
}
// Ejercicio 3
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
rsort($valores);
echo "<br><br> Valores máximos: ";
for ($i = 0; $i < 3; $i++) {
    echo "{$valores[$i]}, ";
}
sort($valores);
echo "<br> Valores mínimos: ";
for ($i = 0; $i < 3; $i++) {
    echo "{$valores[$i]}, ";
}
