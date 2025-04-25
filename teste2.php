<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Css/style.php" />
</head>
<body>
    <?php
    $numero = 10;
    echo gettype ($numero) ;
        $dia_numero = 7;

        switch ($dia_numero) {
            case 1:
                echo "domingo";
                break;

            case 2:
                echo "Segunda";
                break;
            
            case 3:
                echo "Terca";
                break;

            case 4:
                echo "Quarta";
                break;

            case 5:
                echo "Quinta";
                break;

            case 6:
                echo "Sexta";
                break;

            case 7:
                echo "Sabado";
                break;
            
            default :
                echo "Número inválido. Digite um número de 1 a 7.";
        }
    ?>
</body>
</html>