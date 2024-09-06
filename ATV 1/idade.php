<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDADE</title>
     <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <?php
     $idade = $_GET["idade"];

     if($idade>=18){
        echo "voce é meior de idade";
     }
     else{
        echo" voce é menor de idade";
     }
    
    ?>
   
</body>
</html>