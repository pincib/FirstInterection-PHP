
<?php
$i = 0;

/* leva a variável de seu estado inicial até o final
 for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}
*/
/* enquanto a condição for verdadeira, o loop continua
while ($i < 10) {
    echo $i . "<br>";
    $i++;
}
*/
/* executa pelo menos uma vez, mesmo que a condição seja falsa
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);
*/
/* percorre cada item de um array
$array = [1, 2, 3, 4, 5];
foreach ($array as $item) {
    echo $item . "<br>";
}
*/
$array = ["Matheus", "Bernardo", "Zarur"];
foreach ($array as $item) {
    echo '<span style="color:white">' . $item . '</span><br>';
}
