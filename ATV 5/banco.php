<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./banco.css">
</head>
<body>
<?php

$saldo = 1000.00;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcao = $_POST["opcao"];

    switch ($opcao) {
        case '1':
            echo "Seu saldo atual é: R$ " . number_format($saldo, 2, ',', '.');
            break;
        case '2':
            $deposito = 500.00; 
            $saldo += $deposito;
            echo "Você depositou R$ " . number_format($deposito, 2, ',', '.') . ". Seu novo saldo é: R$ " . number_format($saldo, 2, ',', '.');
            break;
        case '3':
            $saque = 200.00; 
            if ($saldo >= $saque) {
                $saldo -= $saque;
                echo "Você sacou R$ " . number_format($saque, 2, ',', '.') . ". Seu novo saldo é: R$ " . number_format($saldo, 2, ',', '.');
            } else {
                echo "Saldo insuficiente para realizar o saque.";
            }
            break;
        case '4':
            echo "Você escolheu sair. Até logo!";
            break;
        default:
            echo "Opção inválida!";
            break;
    }
} else {
    echo "Método de requisição inválido.";
}
?>
    
</body>
</html>


