<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verificação</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'Diogo' && $password === '1234') {
    echo "Login bem-sucedido";
} else {
    echo "Login ou senha incorretos";
}
?>

</body>
</html>