
<?php
$name = "Ana";
if ($name) {
    echo "Olá, " . $name;
} else {
    echo "Olá, visitante.";
}
/* Outra parada */
?>
<?php
$num1 = 2;
$num2 = 2;
if ($num1 == $num2) { ?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <p><?php echo $num1 . " é igual a " . $num2; ?></p>
</body>
</html>
<?php }
?>

<?php
$var1 = 2;
$var2 = 3;
if ($var1 > $var2){
    echo $var1 . "is smaller than " . $var2;
} else {
    echo $var2 . ' is greater than ' . $var1;
}
