
<section>

    <div class="assunto">

        <div class="conteudo">

            <h2>substr(string, start, length); recorta uma string</h2>
            <?php
            $cont = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
            vitae nisl vel neque volutpat finibus. Maecenas consectetur nunc imperdiet,
            consectetur dolor ut, molestie eros. Interdum et malesuada fames ac ante ipsum primis
            in faucibus. Aenean id feugiat ante, non convallis nunc. Nullam volutpat et
            neque sed suscipit. In diam leo, tristique eget lorem quis, hendrerit tristique quam.
            Donec vitae augue sit amet justo maximus scelerisque eget non magna. Mauris pharetra mollis turpis,
            ac vestibulum arcu feugiat et. Donec et imperdiet ipsum. Phasellus accumsan, diam id interdum accumsan,
            leo purus sollicitudin nisi, vel dapibus diam arcu sed metus. Nam hendrerit semper leo eget blandit.
            Sed efficitur tortor ac ornare vulputate. ';
            echo $cont;
            echo '<br>';
            echo substr($cont, 0, 56);
            ?>

        </div>

    </div>

    <div class="assunto">

        <div class="conteudo">

            <h2>explode(string, delimiter); divide uma string em um array</h2>
            <?php
            $name = 'Bernardo Pinciara Rodrigues';
            $names = explode(' ', $name);
            print_r($names);
            echo '<br>';
            ?>

        </div>

    </div>

    <div class="assunto">

        <div class="conteudo">

            <h2>implode(array, delimiter); junta um array em uma string</h2>
            <?php
            $nameString = implode(' ', $names);
            echo $nameString;
            echo '<br>';
            ?>

        </div>

    </div>

    <div class="assunto">

        <div class="conteudo">

            <h2>strip_tags(string); remove tags HTML e PHP de uma string</h2>
            <?php
            $text = '<p>Este é um <strong>texto</strong> com <a href="#">links</a>.</p>';
            echo $text;
            echo strip_tags($text);
            echo '<br>';
            ?>

        </div>

    </div>

    <div class="assunto">

        <div class="conteudo">

            <h2>teste para verificar a diferença entre echo e print_r</h2>
            <?php
            $letters = range('a', 'j'); // Gera o array automaticamente;
            print_r($letters);
            echo '<br>';
            $total = count($letters);
            for ($i = 0; $i < $total; $i++) {
                echo $letters[$i] . ' ';
            }
            ?>

        </div>

    </div>

</section>
