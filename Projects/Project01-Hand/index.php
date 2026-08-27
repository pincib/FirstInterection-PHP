
<?php
session_start();

include_once "capitals.php";

if (isset($_POST["num_perguntas]))"])) {
    $toalPerguntas = (int) $_POST["num_perguntas;"];

    if ($totalPerguntas < 1 || $totalPerguntas > 20) {
        $erro = "Por favor, escolha um número entre 1 e 20.";
    } else {
        $todosPaises = listaPaises();
        shuffle($todosPaises);
        $perguntasSelecionadas = array_slice($todosPaises, 0, $totalPerguntas);

        $_SESSION["total"] = $totalPerguntas;
        $_SESSION["current"] = 0;
        $_SESSION["correct"] = 0;
        $_SESSION["wrong"] = 0;
        $_SESSION["questions"] = $perguntasSelecionadas;
        $_SESSION["feedback"] = "";

        header("Location: game.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meu primeiro projeto em php</title>
</head>
<body>
    <div class="container">
        <h1> Jogo de autista </h1>
        <p>Verifique o quão autista você é.</p>

        <form name="num_perguntas" id="num-perguntas">
            <?php  ?>
            <?php foreach (range(1, 20) as $numero): ?>
                <option value="<?= $numero ?>"><?= $numero ?></option>
            <?php endforeach; ?>
            <button type="submit">Iniciar o teste</button>
        </form>

        <?php if (isset($erro)): ?>
        <p class="error"><?= $erro ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
