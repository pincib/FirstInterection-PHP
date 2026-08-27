
<?php
/*
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/y H:i');
echo 'Hoje é ' . $date;
*/
?>

<?php
    $tittle_site = 'My site';
    include 'header.php';
?>
    <h1>Hello World</h1>
<?php
    include 'footer.php';
?>

<div>

    <p>//include da um aviso mas continua executando</p>
    <p>//require da um erro e para a execução</p>
    <p>//require_once da um aviso mas continua executando</p>
    <p>//include_once da um aviso mas continua executando</p>

</div>


<?php
/*
<?php
    $tittle_site = 'Meu Portal de Notícias';
    include 'includes/header.php';
    include 'includes/nav.php';
?>

<main>
    <div class="container">
        <?php include 'includes/article.php'; ?>

        <?php include 'includes/aside.php'; ?>
    </div>
</main>

<?php
    include 'includes/footer.php';
?>
*/
?>
