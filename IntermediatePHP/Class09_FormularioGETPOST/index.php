
<?php
// GET passa a requisição pelo URL
//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário GET/POST</title>
    <style>

        body {
            background-color: black;
            text-align: center;
            justify-content: center;
            font-family:  Helvetica, sans-serif;
        }

        /* Container pai com Flexbox */
        .container-exemplos {
            display: flex;           /* ativa o flexbox */
            gap: 20px;               /* espaçamento entre as divs */
            align-items: stretch;    /* faz as duas terem a mesma altura */
            margin: 20px 0;
        }

        /* Cada div filha */
        .container-exemplos > div {
            flex: 1;                 /* cada uma ocupa 1 parte do espaço (50% cada) */
            background-color: #1f1f1f;
            border-radius: 10px;
            padding: 15px;
            min-width: 0;            /* impede que o conteúdo force largura extra */
            overflow: hidden;        /* mantém o conteúdo dentro da borda arredondada */
        }

        /* Estilo específico para os <pre> dentro das divs */
        .container-exemplos pre {
            background: #0d0d0d;
            border-radius: 8px;
            padding: 15px;
            overflow-x: auto;       /* adiciona scroll horizontal se o código for longo */
            font-size: 14px;
            font-family: 'Courier New', monospace;
            color: #e0e0e0;
            text-align: left;
            white-space: pre-wrap;  /* quebra linhas longas, se necessário */
            word-break: break-all;  /* quebra palavras muito longas */
            max-height: 400px;      /* limita altura e adiciona scroll vertical */
            overflow-y: auto;
        }

        /* Ajuste para os títulos dentro das divs */
        .container-exemplos h3 {
            margin-top: 0;
            color: #ffaa00;
            border-bottom: 2px solid #ffaa00;
            padding-bottom: 8px;
        }

    </style>
</head>
<body>

    <!-- --- -->

    <!-- ---- Aqui fica o formulário real (funcional) do GET e do POST ---- -->
    <div class="php">

        <!-- --- -->

            <!-- $_GET quando não está setado -->
        <form>
            <input type="text" name="name" placeholder="Digite seu nome">
            <input type="text" name="email" placeholder="Digite seu email">
            <input type="text" name="phone" placeholder="Digite seu telefone">
            <button type="submit" name="action" value="enviar">Enviar</button>
        </form>

        <?php
        if (isset($_GET["action"])) {
            $name = $_GET["name"];
            $email = $_GET["email"];
            $phone = $_GET["phone"];

            echo "<h3>Olá, $name!</h3>";
            echo "<h3>Email: $email</h3>";
            echo "<h3>Telefone: $phone</h3>";
        }
        ?>

        <!-- --- -->

        <!-- $_POST quando está setado -->
        <form action="process.php" method="post">
            <input type="text" name="name" placeholder="Digite seu nome">
            <input type="text" name="email" placeholder="Digite seu email">
            <input type="text" name="phone" placeholder="Digite seu telefone">
            <button type="submit" name="action" value="enviar">Enviar</button>
        </form>

        <?php
        if (isset($_POST["action"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];

            echo "<h3>Olá, $name!</h3>";
            echo "<h3>Email: $email</h3>";
            echo "<h3>Telefone: $phone</h3>";
        }
        ?>

    </div>

    <!-- --- -->

    <!--
        IMPORTANTE: a classe do container PRECISA ser "container-exemplos".
        Foi essa a classe que definimos no <style> lá em cima com display: flex,
        que é o que faz as duas divs (GET e POST) ficarem uma do lado da outra.
        Antes estava "container", que não tinha estilo nenhum por isso elas
        ficavam empilhadas uma embaixo da outra.
    -->
    <div class="container-exemplos">

        <div class="GET">

            <h3>Código com $_GET</h3>

            <!-- ================= Início da região de exemplos =================
                Tudo o que está entre este comentário e o comentário de fim (logo
                abaixo do `$exemplo2`) é a "região delimitada" que guarda os
                exemplos de código (`$exemplo1` para GET e `$exemplo2` para POST).
                ================================================================== -->
            <p>

                <?php
                // Guarde TODO o código que você quer mostrar como exemplo
                $exemplo1 = '
                <form>
                    <input type="text" name="name" placeholder="Digite seu nome">
                    <input type="text" name="email" placeholder="Digite seu email">
                    <input type="text" name="phone" placeholder="Digite seu telefone">
                    <button type="submit" name="action" value="enviar">Enviar</button>
                </form>

                <?php
                if (isset($_GET["action"])) {
                    $name = $_GET["name"];
                    $email = $_GET["email"];
                    $phone = $_GET["phone"];

                    echo "<h3>Olá, $name!</h3>";
                    echo "<h3>Email: $email</h3>";
                    echo "<h3>Telefone: $phone</h3>";
                }
                ?>
                ';

                // htmlspecialchars($exemplo1) exibe o código com formatação e caracteres convertidos
                echo '<pre>' . htmlspecialchars($exemplo1) . '</pre>';
                ?>

            </p>

        </div>

        <!-- --- -->

        <div class="POST">

            <h3>Código com $_POST</h3>

            <?php
            // Guarde TODO o código que você quer mostrar como exemplo
            $exemplo2 = '
            <form action="process.php" method="post">
                <input type="text" name="name" placeholder="Digite seu nome">
                <input type="text" name="email" placeholder="Digite seu email">
                <input type="text" name="phone" placeholder="Digite seu telefone">
                <button type="submit" name="action" value="enviar">Enviar</button>
            </form>

            <?php
            if (isset($_POST["action"])) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];

                echo "<h3>Olá, $name!</h3>";
                echo "<h3>Email: $email</h3>";
                echo "<h3>Telefone: $phone</h3>";
            }
            ?>
            ';

            // htmlspecialchars($exemplo2) exibe o código com formatação e caracteres convertidos
            echo '<pre>' . htmlspecialchars($exemplo2) . '</pre>';
            ?>

            <!-- ================= Fim da região de exemplos ================= -->

        </div>

    </div>

    <!-- --- -->

</body>
</html>
