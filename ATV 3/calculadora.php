<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
<?php
$n1 = 0;
$n2 = 0;
$resultado = 0;

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$calculadora = $_GET["calculadora"];

switch ($calculadora) {
    case "somar":
        $resultado = $n1 + $n2;
        echo "Resultado: $resultado";
        break;
    case "subtrair":
        $resultado = $n1 - $n2;
        echo "Resultado: $resultado";
        break;
    case "multiplicar":
        $resultado = $n1 * $n2;
        echo "Resultado: $resultado";
        break;
    case "dividir":
        $resultado = $n1 / $n2;
        echo "Resultado: $resultado";
        break;
}
?>
</main>
</body>

</html>