<html>

<head>
    <title>Aula 01</title>
    <meta charset="utf-8">
</head>
<body>
<!--1° forma de mudar a cor da variável-->
    <h1 style="color:white">
        <?php
        $name = 'Bernardo';
        echo $name;
        ?>
    </h1>
<!--2° forma de mudar a cor da variável-->
    <h4>
        <?php
        echo 'My name is <h4 style="color:white">' . $name . '</h4>';
        ?>
    </h4>

</body>

</html>
