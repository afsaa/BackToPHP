<?php
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
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repaso PHP</title>
</head>

<body>
    <div>
        <h1>Andrés Saa</h1>
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum incidunt ipsam ullam est ipsum autem.</h3>
    </div>
    <div>
        <h2>Skills and Roles</h2>
        <h3>WebView Developer</h3>
        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, quod sint est accusantium placeat nisi repellendus asperiores modi quibusdam ratione, molestias quidem libero velit, voluptas totam ullam dignissimos nulla unde.</h4>
        <h3>React Developer</h3>
        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, quod sint est accusantium placeat nisi repellendus asperiores modi quibusdam ratione, molestias quidem libero velit, voluptas totam ullam dignissimos nulla unde.</h4>
        <h3>Frontend Developer</h3>
        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, quod sint est accusantium placeat nisi repellendus asperiores modi quibusdam ratione, molestias quidem libero velit, voluptas totam ullam dignissimos nulla unde.</h4>
    </div>
</body>

</html>