<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

// Array inicial de carros
$carros = [
    ["nombre" => "carro 1", "precio" => 1500],
    ["nombre" => "carro 2", "precio" => 1600],
    ["nombre" => "carro 3", "precio" => 1700],
    ["nombre" => "carro 4", "precio" => 1800],
    ["nombre" => "carro 5", "precio" => 1900],
];


usort($carros, function ($a, $b) {
    return $a['precio'] - $b['precio'];
});

echo "carros sin agregar nada:<br>";
foreach ($carros as $carro) {
    echo "La calificación de {$carro['nombre']} es {$carro['precio']}<br>";
}
echo "<br>";
echo "<br>";


array_push($carros, ["nombre" => "carro 6", "precio" => 2000]);
array_push($carros, ["nombre" => "carro 7", "precio" => 2100]);


usort($carros, function ($a, $b) {
    return $a['precio'] - $b['precio'];
});

echo "Carros después de agregar mas carros:<br>";
foreach ($carros as $carro) {
    echo "La calificación de {$carro['nombre']} es {$carro['precio']}<br>";

}
    echo "<br>";
    echo "los carros estan ordenados por su precio de menor a mayor";
    echo "<br>";
    echo "los de a mero arriba son los de menor precio y los de a mero abajo son los de mayor precio";
?>

</body>
</html>