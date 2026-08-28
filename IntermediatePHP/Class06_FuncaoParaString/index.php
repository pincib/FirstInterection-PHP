
<?php
/*
// substr(string, start, length) recorta uma string
    $cont = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
    vitae nisl vel neque volutpat finibus. Maecenas consectetur nunc imperdiet,
    consectetur dolor ut, molestie eros. Interdum et malesuada fames ac ante ipsum primis
    in faucibus. Aenean id feugiat ante, non convallis nunc. Nullam volutpat et
    neque sed suscipit. In diam leo, tristique eget lorem quis, hendrerit tristique quam.
    Donec vitae augue sit amet justo maximus scelerisque eget non magna. Mauris pharetra mollis turpis,
    ac vestibulum arcu feugiat et. Donec et imperdiet ipsum. Phasellus accumsan, diam id interdum accumsan,
    leo purus sollicitudin nisi, vel dapibus diam arcu sed metus. Nam hendrerit semper leo eget blandit.
    Sed efficitur tortor ac ornare vulputate. ';

    echo substr($cont, 0, 56);
    echo '<hr>';

//explode(string, delimiter) divide uma string em um array
    $name = 'Bernardo Pinciara Rodrigues';
    $names = explode(' ', $name);
    print_r($names);
    echo '<hr>';

//implode(array, delimiter) junta um array em uma string
    $nameString = implode(' ', $names);
    echo $nameString;
    echo '<hr>';

//strip_tags(string) remove tags HTML e PHP de uma string
    $text = '<p>Este é um <strong>texto</strong> com <a href="#">links</a>.</p>';
    echo $text;
    echo '<hr>';
    echo strip_tags($text);
    echo '<hr>';

//teste para verificar a diferença entre echo e print_r
    $letters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    $letters = range('a', 'z'); // Gera o array automaticamente
    print_r($letters);
    echo '<hr>';
    $total = count($letters);
    for ($i = 0; $i < $total; $i++) {
        echo $letters[$i] . ' ';
    }
*/
?>

    <?php
        $tittle_site = 'Funcao para arrys';
        include 'html/header.php';
    ?>

    <main>
        <div class="container">
            <?php include 'html/section.php'; ?>
        </div>
    </main>

    <?php
        include 'html/footer.php';
    ?>
