<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    <?php
    
$n1=$_GET["n1"];
$n2=$_GET["n2"];
$operação=$_GET["operação"];

$calculadora->setNumero1($n1);
$calculadora->setNumero2($n2);
switch($operacao){
    case "somar":
        $calculadora->somar();
        break;
    case "subtrair":
        $calculadora->subtrair();
        break;
    case "dividir":
        $calculadora->dividir();
        break;
    case "multiplicar":
        $calculadora->multiplicar();
        break;
}


?>
</body>
</html>