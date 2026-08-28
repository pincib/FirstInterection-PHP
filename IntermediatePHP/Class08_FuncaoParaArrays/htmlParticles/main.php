
<main>

    <div class="assunto">

        <div class="conteudo">

            <h2>array_merge($var1, $var2); uni as arrays</h2>
            <?php
            $var1 = range('a', 'i');
            $var2 = range('j', 't');
            $result1 = array_merge($var1, $var2);
            print_r($result1);
            echo '<br>';
            echo count($result1);
            echo '<br>';
            ?>

        </div>

    </div>

    <div class="assunto">

        <div class="conteudo">

            <h2>array_intersect_key($var1, $var2); retorna a interseção de chaves</h2>
            <?php
            $var1 = range('a', 'i');
            $var2 = range('j', 't');
            $result2 = array_intersect_key($var1, $var2);
            $result3 = array_intersect_key($var2, $var1);
            print_r($result2);
            echo '<br>';
            echo count($result2);
            echo '<br>';
            print_r($result3);
            echo '<br>';
            echo count($result3);
            echo '<br>';
            ?>

        </div>

    </div>

</main>
