
<?php

// sleep(); - coloca o servidor para dormir antes de executar o código
/*
sleep(5);
echo 'o servidor acordou';
*/

// die(); - encerra o script
$name = array(array('A'),array('B'));

if ($name[1][0] == 'A') {
    echo 'Certinho';
} elseif ($name[1][0] == 'B') {
    //tudo apos o die(); tudo apos dele morre
    die('o script morreu');
}

echo 'teste';
