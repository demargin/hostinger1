<?php
    $a = 5;
    $b = 3;
    $c = "7";

    $suma = $a + $b;
    $resta = $a - $b;
    $multi = $a * $b;
    $poten = $a ** $b;
    $divi = $a / $b;
    $modulo = $a % $b;
    $ident = +$c;
    $negac = -$a;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="index.php">Volver a la pagina INICIO</a>
    <title>Operadores Matematicos</title>
</head>
<body>
    <h2>
        Para ejemplificar los operadores en PHP usaremos los siguiente valores:

        </h2>
        <h3> ----> a = 5</h3>
        <h3> ----> b = 3</h3>
        <h3> ----> c = "7"</h3>
    <h3>la suma de a + b = <?=$suma?></h3>
    <h3>la resta de a - b = <?=$resta?></h3>
    <h3>la multiplicacion de a x b = <?=$multi?></h3>
    <h3>la Potencia de a elevado a la b = <?=$poten?></h3>
    <h3>la Division de a / b = <?=$divi?></h3>
    <h3>la El residuo de dividir o el resto de a / b = <?=$modulo?></h3>
    <h3>la identidad (convetir una variable string a int) de c es = <?=$ident?></h3>
    <h3>la negacion del valor de "a" es :: <?=$negac?></h3>
</body>
</html>