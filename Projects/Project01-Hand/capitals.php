
<?php
@return array

function listaPaises() {
    return [
        // Formato: ['name' => 'Nome do País', 'capital' => 'Capital']
        ['name' => 'Brasil',       'capital' => 'Brasília'],
        ['name' => 'Estados Unidos', 'capital' => 'Washington D.C.'],
        ['name' => 'França',        'capital' => 'Paris'],
        ['name' => 'Alemanha',      'capital' => 'Berlim'],
        ['name' => 'Itália',        'capital' => 'Roma'],
        ['name' => 'Espanha',       'capital' => 'Madri'],
        ['name' => 'Portugal',      'capital' => 'Lisboa'],
        ['name' => 'Japão',         'capital' => 'Tóquio'],
        ['name' => 'China',         'capital' => 'Pequim'],
        ['name' => 'Rússia',        'capital' => 'Moscou'],
        ['name' => 'Índia',         'capital' => 'Nova Delhi'],
        ['name' => 'Canadá',        'capital' => 'Ottawa'],
        ['name' => 'Austrália',     'capital' => 'Canberra'],
        ['name' => 'Argentina',     'capital' => 'Buenos Aires'],
        ['name' => 'México',        'capital' => 'Cidade do México'],
        ['name' => 'Chile',         'capital' => 'Santiago'],
        ['name' => 'Colômbia',      'capital' => 'Bogotá'],
        ['name' => 'Peru',          'capital' => 'Lima'],
        ['name' => 'Egito',         'capital' => 'Cairo'],
        ['name' => 'Turquia',       'capital' => 'Ankara'],
        ['name' => 'Reino Unido',   'capital' => 'Londres'],
        ['name' => 'Países Baixos', 'capital' => 'Amsterdã'],
        ['name' => 'Bélgica',       'capital' => 'Bruxelas'],
        ['name' => 'Suécia',        'capital' => 'Estocolmo'],
        ['name' => 'Noruega',       'capital' => 'Oslo'],
        ['name' => 'Finlândia',     'capital' => 'Helsinque'],
        ['name' => 'Polônia',       'capital' => 'Varsóvia'],
        ['name' => 'Grécia',        'capital' => 'Atenas'],
        ['name' => 'Áustria',       'capital' => 'Viena'],
        ['name' => 'Suíça',         'capital' => 'Bern'],
    ];
}

function gerarPerguntas($paisCorreto, $todosPaises) {
    $opcoes = [];
    $opcoes[] = ['capital' => $paisCorreto['capital'], 'correta' => true];

    $tentativas = 0;
    while (count($opcoes) < 3 && $tentativas < 100) {
        $indiceAleatorio = mt_rand(0, count($todosPaises) - 1);
        $paisAleatorio = $todosPaises[$indiceAleatorio];
        if ($paisAleatorio['capital'] !== $paisCorreto['capital']) {
            $opcoes[] = ['capital' => $paisAleatorio['capital'], 'correta' => false];
            $tentativas++;
        }
        $tentativas++;
    }
    shuffle($opcoes);
    return $opcoes;
}
