<?php
require 'config.PDO.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

  
    $sql = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";
    $stmt = $pdo->prepare($sql);

}
?>