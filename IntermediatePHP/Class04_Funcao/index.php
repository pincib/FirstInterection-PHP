
<?php
/* ORIGINAL
//criando uma funcao
$names = array('A', 'B', 'C');
function mostrarNome(string $item) {
    echo '<span style="color:white"> My name is ' . $item . '</span><br><hr>';
}
for ($i = 0; $i < count($names); $i++) {
    mostrarNome($names[$i]);
}
//sempre que uma funcao for chamada, o codigo dentro dela e executado
*/

// EXPLICAÇÃO DA IA

// 1. O ESTOQUE (O Array)
$names = array('A', 'B', 'C');
// "Ei PHP, guarde essa lista de letras em uma caixa chamada $names."

// 2. O MANUAL DE INSTRUÇÕES (A Função)
function mostrarNome(string $nomeDaVez) {
    // "Aqui estou ensinando o PHP a fazer algo, mas ele AINDA NÃO vai fazer."
    // "Sempre que alguém me der um texto (string), eu vou escrever na tela
    // 'My name is' seguido desse texto, dentro de um span branco."
    echo '<span style="color:white"> My name is ' . $nomeDaVez . '</span><hr>';
}

// 3. O MOTOR (O Loop For)
for ($i = 0; $i < count($names); $i++) {
    // "Vou começar um contador ($i) no zero."
    // "Vou repetir isso enquanto o contador for menor que o tamanho da lista (3)."

    // 4. O CHAMADO (Executando a função)
    mostrarNome($names[$i]);
    // "PHP, pegue a letra que está na posição $i da lista e jogue lá dentro
    // daquele manual de instruções (função) que eu criei antes."
}

?>

<?php
