
<?php
/*
$isValid = false;

if ($isValid) {
    echo "O valor é válido";
} else {
    echo "O valor é inválido";
}
*/
/*
define("NAME", "Joao");
echo NAME;
*/

$num1 = 5;
$num2 = 4;
$num3 = 1;
$num4 = $num1 - $num2 + $num3;

if ($num4 != $num3) {
    echo $num4 . ' é diferente de ' . $num3;
} else {
    echo $num4 . ' é igual a ' . $num3;
}
