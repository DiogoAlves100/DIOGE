<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV3</title>
</head>
<body>
<?php
function calcularPesoIdeal($sexo, $altura) {
    if ($sexo == 'M') { 
        return (72.2 * $altura) - 58;
    } elseif ($sexo == 'F') { 
        return (62.1 * $altura) - 44.7;
    } else {
        return "Sexo inválido. Use 'M' para masculino ou 'F' para feminino.";
    }
}
$sexo = 'M'; 
$altura = 1.75; 
$pesoIdeal = calcularPesoIdeal($sexo, $altura);
echo "O peso ideal é: " . $pesoIdeal . " kg";
?>

    
</body>
</html>