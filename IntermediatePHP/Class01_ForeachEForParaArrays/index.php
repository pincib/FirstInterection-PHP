
<?php
 /*
echo '<h3>Lista Simples:</h3>';

$arr = array('A','B','C','D','E','F','G');
$extenso = array('Primeira', 'Segunda', 'Terceira', 'Quarta', 'Quinta', 'Sexta', 'Sétima');
//O foreach percorre o array e retorna a chave e o valor de cada elemento
foreach ($arr as $key => $value) {
    echo $key . ' => ' . $extenso[$key] . ' - ' . $value . '<br><hr>';
}
foreach ($arr as $key => $value) {
    // 1. Fazer algo especial no primeiro item
    if ($key == 0) {
        echo "Início da lista: $value<br>";
        echo '<br><hr>';
    } elseif ($key == count($arr) - 1) {
        echo "Fim da lista: $value<br>";
        echo '<br><hr>';
    }
}
foreach ($arr as $key => $value) {
    // 2. Destacar apenas os itens de posição par
    if ($key % 2 == 0) {
        echo "Chave $key: Valor $value (Sou PAR!)<br>";
        echo '<br><hr>';
    } else {
        echo "Chave $key: Valor $value (Sou ÍMPAR!)<br>";
        echo '<br><hr>';
    }
}

//O for percorre o array e retorna o valor de cada elemento
$total = count($arr);
for ($i = 0; $i < $total; $i++) {
    echo $arr[$i] . '<br><hr>';
}
*/
?>

<?php
$arr = array('A','B','C','D','E','F','G');
$extenso = array('Primeira', 'Segunda', 'Terceira', 'Quarta', 'Quinta', 'Sexta', 'Sétima');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach e For para Arrays</title>
    <style>
    body {
        color: black;
        background-color: white;
        text-align: center;
        justify-content: center;
        font-family: Arial, Helvetica, sans-serif;
    }
    section {
        margin: 0.25em;
        padding: 1em;
        border: solid slategray;
        border-radius: 2em;
    }
    </style>
</head>
<body>

    <header>
        <h1>Foreach e For para Arrays</h1>
    </header>


    <section class="sec1">
        <?php
        foreach ($arr as $key => $value) {
            echo $key . ' => ' . $extenso[$key] . ' - ' . $value . '<br>';
        }
        ?>
    </section>

    <section class="sec2">
        <?php
        //O foreach percorre o array e retorna a chave e o valor de cada elemento
        foreach ($arr as $key => $value) {
            // 1. Fazer algo especial no primeiro item
            if ($key == 0) {
                echo "Início da lista: $value<br>";
            } elseif ($key == count($arr) - 1) {
                echo "Fim da lista: $value<br>";
            }
        }
        ?>
    </section>

    <section class="sec3">
        <?php
        foreach ($arr as $key => $value) {
            // 2. Destacar apenas os itens de posição par
            if ($key % 2 == 0) {
                echo "Chave $key: Valor $value (Sou PAR!)<br>";
            } else {
                echo "Chave $key: Valor $value (Sou ÍMPAR!)<br>";
            }
        }
        ?>
    </section>

    <section class="sec4">
        <?php
        //O for percorre o array e retorna o valor de cada elemento
        $total = count($arr);
        for ($i = 0; $i < $total; $i++) {
            echo $arr[$i] . ' ';
        }
        ?>
    </section>

</body>
</html>

<?php
 /*
$arr = array('A','B','C','D','E','F','G');
$extenso = array('Primeira', 'Segunda', 'Terceira', 'Quarta', 'Quinta', 'Sexta', 'Sétima');

echo "<h3>Lista Detalhada:</h3>";

foreach ($arr as $key => $value) {

    // 1. Identificar se é Par ou Ímpar usando a $key
    $tipo = ($key % 2 == 0) ? "PAR" : "ÍMPAR";

    // 2. Verificar se é o primeiro ou o último (uso da $key para controle)
    $aviso = "";
    if ($key === 0) {
        $aviso = " (Início da lista)";
    } elseif ($key === count($arr) - 1) {
        $aviso = " (Fim da lista)";
    }

    // 3. Executar a ação para TODOS os itens
    // Aqui montamos a frase usando a $key para buscar no array de nomes
    echo "Chave: $key => $extenso[$key] letra: $value | Posição: $tipo $aviso <br><hr>";
}
*/
?>
