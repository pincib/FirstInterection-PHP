
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tittle_site; ?></title>
    <style>
        body{
            font-family: Helvetica, sans-serif;
            background-color: black;
            color:white;
            text-align: center;
            justify-content: center;
        }
        .div_main h1 {
            font-size: 4em;
        }
        .assunto {
            background-color: #1f1f1f;
            border: 5% solid black;
            border-radius: 1em;
            margin: 1%;
            margin-top: 0.5%;
            margin-bottom: 0.5%;
            padding: 0;
            hover;
        }
        .conteudo {
            padding: 1%;
            margin: 1%;
        }
        h2 {
            margin-top: 0.5%;
            margin-bottom: 0.5%;;
        }
        br {
            margin: 0.75%;
        }
        strong {
            color:red;
        }
        a {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="div_main">
        <h1><?php echo $tittle_site; ?></h1>
