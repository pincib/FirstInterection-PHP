
<?php
// brincarei com outras coisas do if, else e ifelse
$letters = 'A'; //switch não aceita array
// switch: caso aconteça isso, faça isso
switch ($letters) {
    case "A":
        echo "The letter is a ";
        echo '<hr>';
        break;
}

for ($i = 0; $i < 20; $i ++) {
    echo $i;
    echo "<hr>";
    if ($i == 10) {
        break; // o break interrompe o loop
    }
}
