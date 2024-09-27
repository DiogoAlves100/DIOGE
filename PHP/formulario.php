<?php
require 'config.PDO.php';
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="stylss.css">
</head>
<body>
    <h1>Cadastra</h1>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
    
    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
    
    <button type="submit">Salva</button>
</body>
</html>