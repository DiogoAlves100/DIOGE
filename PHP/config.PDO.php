<?php
try {

    $pdo = new PDO("mysql:host:localhost:3307;dbname:cadastro", "root", "cimatec");
    //"mysql:host:localhost:3307;dbname:cadastro"

} catch (Exception $e) {

 echo 'Erro a conectar  ' . $e->getMessage();
}

?>