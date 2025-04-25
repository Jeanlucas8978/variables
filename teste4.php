<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calcularArea ($largura, $altura) {
        $area = $largura * $altura;
        return $area;
    }

    echo calcularArea(50,70);
    ?>
</body>
</html>