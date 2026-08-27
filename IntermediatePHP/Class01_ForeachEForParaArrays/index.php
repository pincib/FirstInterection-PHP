
<?php

$arr = array('A','B','C','D','E','F','G');
//O foreach percorre o array e retorna a chave e o valor de cada elemento
foreach ($arr as $key => $value) {
    echo $key . '=>' . 'Letra ' . $value . '<br><hr>';
}
//O for percorre o array e retorna o valor de cada elemento
$total = count($arr);
for ($i = 0; $i < $total; $i++) {
    echo $arr[$i] . '<br><hr>';
}
