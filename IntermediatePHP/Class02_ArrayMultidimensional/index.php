
<?php
//apenas 1 array
    $arr1 = array('A','B','C','D');
    echo '$arr1 = array(A, B, C, D);';
    echo '<br><hr>';
    echo '$arr1[0] = A';
    echo '<br><hr>';
    echo '$arr1[1] = B';
    echo '<br><hr>';
    echo '$arr1[2] = C';
    echo '<br><hr>';
    echo '$arr1[3] = D';
    echo '<br><hr>';
//joguei um array dentro do outro e os [][] identificam o array
    $arr2 = array(
        array('A'),
        array('B'),
        array('C'),
        array('D'),
    );
    echo '$arr2 = array(array(A),array(B),array(C),array(D),);';
    echo '<br><hr>';
    echo '$arr2[0][0] = A';
    echo '<br><hr>';
    echo '$arr2[1][0] = B';
    echo '<br><hr>';
    echo '$arr2[2][0] = C';
    echo '<br><hr>';
    echo '$arr2[3][0] = D';
    echo '<br><hr>';
//Ficou uma bagunça aqui mas no localhost ficou bem explicito
