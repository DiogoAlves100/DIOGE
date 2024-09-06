<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTAS</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    $notas = $_GET["notas"];
    echo ("$notas");

    if ($notas >= 0 and $notas <= 10) {

        switch ($notas) {
            case 9:
                echo "NOTA: A";
                break;
            case 8:
                echo "NOTA: B";
                break;
            case 7:
                echo "NOTA: C";
                break;
            case 6:
                echo "NOTA: D";
                break;
            case 5:
                echo "NOTA: E";
                break;
            default:
                echo "NOTA NÃO CLASSIFICADA";
                break;
        }
    }
    ?>
</body>

</html>