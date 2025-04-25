<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calcularImpostoDeRenda($salario) {
        if ($salario <= 1938.98) {
            return 0;
        } elseif ($salario<=2826.55) {
            return $salario * 0.075;
        } elseif ($salario <=3751.05) {
            return $salario * 0.15;
        } elseif ($salario <= 4664.68) {
            return $salario * 0.225; 
        } else {
            return $salario * 0.275;
        }
    }
    $salario = 5000;
    $imposto = calcularImpostoDeRenda ($salario);
    echo "O imposto a ser pago terá o valor de: " . $imposto;

    ?>
</body>
</html>